<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubscriptionTransaction extends Model
{
    protected $table = 'subscription_transactions';

    protected $fillable = [
        'user_id',
        'payment_type',
        'payment_status',
        'expired_at',
        'payment_amount',
        'payment_token',
        'payment_proof',
    ];

    /**
     * Get the user associated with the subscription transaction.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
