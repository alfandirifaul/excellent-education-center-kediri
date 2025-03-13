<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = ['name', 'email', 'password', 'photo', 'phone', 'address'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get related subscription transactions.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptionTransactions(): HasMany
    {
        return $this->hasMany(SubscriptionTransaction::class);
    }

    /**
     * Get related guru
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function guru(): HasOne
    {
        return $this->hasOne(Guru::class);
    }

    /**
     * Get related siswa
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function siswa(): HasOne
    {
        return $this->hasOne(Siswa::class);
    }

    public function hasActiveSubscription()
    {
        $latestSubscription = $this->subscriptionTransactions()->where('payment_status', true)->latest('updated_at')->first();

        $subcrptionEndDate = '';

        if (!$latestSubscription) {
            return false;
        }

        if ($latestSubscription->payment_type == 'monthly') {
            $subcrptionEndDate = Carbon::parse($latestSubscription->payment_start_date)->addMonth(1);
        } else {
            $subcrptionEndDate = Carbon::parse($latestSubscription->payment_start_date)->addYear(1);
        }

        if (!$latestSubscription) {
            return false;
        }

        return Carbon::now()->lessThanOrEqualTo($subcrptionEndDate);
    }

    public function getEndDateSubscription()
    {
        $latestSubscription = $this->subscriptionTransactions()->where('payment_status', true)->latest('updated_at')->first();

        if (!$latestSubscription) {
            return null;
        }

        if ($latestSubscription->payment_type == 'bulanan') {
            return Carbon::parse($latestSubscription->payment_start_date)->addMonth(1);
        } else {
            return Carbon::parse($latestSubscription->payment_start_date)->addYear(1);
        }
    }

    public function getImgUrl()
    {
        return $this->photo ? asset('storage/' . $this->photo) : asset('img/logo/user-placeholder.png');
    }
}
