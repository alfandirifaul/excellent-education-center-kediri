<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePaymentRequest;
use App\Http\Requests\UpdateSiswaRequest;
use App\Models\Kelas;
use App\Models\Pricing;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    private function generateOrderId($id) {
        return 'EEC-' . $id . '#' . now()->setTimezone('Asia/Jakarta')->format('dmY') . '-' . now()->setTimezone('Asia/Jakarta')->format('His') . '/' . time();
    }

    public function index()
    {
        $user = Auth::user();
        $kelas = Kelas::all();
        $price = Pricing::all();

        if ($user->hasRole('siswa')) {
            return view('siswa-dashboard.index', compact('user', 'kelas', 'price'));
        } else {
            return view('dashboard', compact('kelas'));
        }
    }

    public function showPaymentPage(Request $request)
    {
        $user = Auth::user();

        if ($user->hasRole('siswa')) {
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
                dd($e->getMessage());
                return redirect()->back()->with('error', $e->getMessage());
            }
        } else {
            $kelas = Kelas::all();
            return view('dashboard', compact('kelas'));
        }
    }

    public function processPayment(Request $request)
    {
        $user = Auth::user();

        if ($user->hasRole('siswa')) {
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
        } else {
            $kelas = Kelas::all();
            return view('dashboard', compact('kelas'));
        }
    }

    public function setKelasSiswaDashboard(Request $request, User $user)
    {
        if ($user->hasRole('siswa')) {
            $validate = $request->validate([
                'kelas_id' => 'required|exists:kelas,id',
            ]);

            DB::transaction(function () use ($validate, $user) {
                $siswa = Siswa::firstWhere('user_id', $user->id);

                if ($siswa) {
                    $siswa->update($validate);
                } else {
                    Siswa::create([
                        'user_id' => $user->id,
                        'kelas_id' => $validate['kelas_id'],
                        'nama' => $user->name,
                    ]);
                }
            });

            return redirect()->route('siswa-dashboard.index')->with('success', 'Kelas berhasil diatur');
        }
    }

    public function settingsSiswa()
    {
        $user = Auth::user();
        $kelas = Kelas::all();

        if ($user->hasRole('siswa')) {
            return view('siswa-dashboard.setting.index', compact('user', 'kelas'));
        }
    }

    public function settingSiswaUpdate(UpdateSiswaRequest $request, User $user)
    {
        if ($user->hasRole('siswa')) {
            DB::transaction(function () use ($request, $user) {
                $validate = $request->validated();

                if ($request->hasFile('photo')) {
                    $photo = $request->file('photo')->store('photo', 'public');
                    $validate['photo'] = $photo;
                }

                $user->update($validate);

                $validate['nama'] = $validate['name'];
                $validate['user_id'] = $user->id;

                $existingSiswa = Siswa::firstWhere('user_id', $user->id);

                if ($existingSiswa) {
                    if (!is_null($existingSiswa->kelas_id)) {
                        unset($validate['kelas_id']);
                    }
                } else {
                    Siswa::create($validate);
                }
            });
        }

        return redirect()->route('siswa-dashboard.settings')->with('success', 'Profil berhasil diperbarui');
    }

    public function priceSiswaDashboard()
    {
        $kelas = Kelas::all();
        $price = Pricing::all();
        $user = Auth::user();

        return view('siswa-dashboard.price.index', compact('kelas', 'price', 'user'));
    }
}
