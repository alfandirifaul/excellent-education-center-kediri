<?php

namespace App\Http\Controllers;

use App\Models\SubscriptionTransaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function pay()
    {
        $user = Auth::user();
        $amount = $user->siswa->kelas->price->price_monthly;

        // Set Midtrans configuration
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        // Use a more reliable order ID format
        $orderId = 'EEC-' . now() . '-' . $user->id . '#' . time();

        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => intval($amount),
            ],
            'item_details' => [
                [
                    'id' => $user->siswa->kelas->id,
                    'price' => $amount,
                    'quantity' => 1,
                    // 'name' => 'EEC '. $user->siswa->kelas->nama . ' Tahunan',
                ],
            ],
            'customer_details' => [
                "first_name"=> $user->name,
                "last_name"=> '',
                'email' => 'halo@halo.com',
                'phone' => $user->phone ?? '',
                // 'subscription_type' => $type,
            ],
        ];

        try {
            $snapToken = \Midtrans\Snap::getSnapToken($params);

            // Optionally, store transaction information in database
            $transaction = new SubscriptionTransaction();
            $transaction->user_id = $user->id;
            $transaction->amount = $amount;
            $transaction->order_id = $orderId;
            $transaction->snap_token = $snapToken;
            $transaction->status = 'pending';
            // $transaction->save();

            return view('subscription-transactions.index', compact('snapToken', 'orderId'));
        } catch (\Exception $e) {
            return ($e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SubscriptionTransaction $subscriptionTransaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubscriptionTransaction $subscriptionTransaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubscriptionTransaction $subscriptionTransaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubscriptionTransaction $subscriptionTransaction)
    {
        //
    }
}
