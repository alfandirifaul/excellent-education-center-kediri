<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\SubscriptionTransaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\alert;

class SubscriptionTransactionController extends Controller
{
    private function generateOrderId($id)
    {
        return 'EEC-' . $id . '#' . now()->setTimezone('Asia/Jakarta')->format('dmY') . '-' . now()->setTimezone('Asia/Jakarta')->format('His') . '/' . time();
    }
    public function processPayment(Request $request)
    {
        $user = Auth::user();

        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $orderId = $this->generateOrderId($user->id);

        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => intval($request->amount),
            ],
            'item_details' => [
                [
                    'id' => $request->kelas_id,
                    'price' => intval($request->amount),
                    'quantity' => 1,
                    'name' => 'EEC ' . ($user->siswa->kelas->nama ?? 'Course') . ' ' . $request->type,
                ],
            ],
            'customer_details' => [
                'first_name' => $user->name,
                'last_name' => '',
                'email' => $user->email,
                'phone' => $user->phone ?? '',
            ],
        ];

        try {
            // Get Snap Token
            $snapToken = \Midtrans\Snap::getSnapToken($params);

            return response()->json([
                'success' => true,
                'snap_token' => $snapToken,
                'order_id' => $orderId,
            ]);
        } catch (\Exception $e) {
            return response()->json(
                [
                    'success' => false,
                    'message' => $e->getMessage(),
                ],
                500,
            );
        }
    }

    public function showPaymentPage(Request $request)
    {
        $user = Auth::user();

        $kelas = Kelas::find($request->kelas);
        $price = $request->price;
        $type = $request->type;

        // Initialize Midtrans config
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $orderId = $this->generateOrderId($user->id);

        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => intval($price),
            ],
            'item_details' => [
                [
                    'id' => $kelas->id,
                    'price' => intval($price),
                    'quantity' => 1,
                    'name' => 'EEC ' . $kelas->nama . ' ' . $type,
                ],
            ],
            'customer_details' => [
                'first_name' => $user->name,
                'last_name' => '',
                'email' => $user->email,
                'phone' => $user->phone ?? '',
            ],
        ];

        try {
            // Get Snap Token
            $snapToken = \Midtrans\Snap::getSnapToken($params);

            return view('siswa-dashboard.payment.index', compact('user', 'kelas', 'price', 'type', 'snapToken', 'orderId'));
        } catch (\Exception $e) {
            alert($e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function store(Request $request)
    {
        try {
            $user = Auth::user();

            return DB::transaction(function () use ($request, $user) {
                $validate = $request->validate([
                    'payment_type' => 'required|string',
                    'payment_status' => 'required|string|max:20',
                    'payment_amount' => 'required|numeric',
                    'transaction_id' => 'nullable|string',
                ]);

                $paymentStatus = $validate['payment_status'] === 'success' ? true : false;

                $paymentType = $request->type ?? 'monthly';

                $transaction = SubscriptionTransaction::create([
                    'user_id' => $user->id,
                    'payment_type' => $paymentType,
                    'payment_method' => $validate['payment_type'],
                    'payment_status' => $paymentStatus,
                    'payment_amount' => $validate['payment_amount'],
                    'payment_start_date' => now(),
                    'transaction_id' => $request->transaction_id ?? null,
                ]);

                return response()->json([
                    'success' => true,
                    'message' => 'Transaction created successfully',
                    'transaction' => $transaction,
                ]);
            });
        } catch (\Exception $e) {
            // Log the error for debugging
            // \Log::error('Payment processing error: ' . $e->getMessage());
            // \Log::error($e->getTraceAsString());

            return response()->json(
                [
                    'success' => false,
                    'message' => 'Transaction failed: ' . $e->getMessage(),
                ],
                500,
            );
        }
    }
}
