<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pricing extends Model
{
    protected $guarded = ['id'];

    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class);
    }

    public static function formatRupiah($number): string
    {
        return 'Rp ' . number_format($number, 0, ',', '.');
    }

    public function getRupiahFormat(): string
    {
        if ($this->price_yearly) {
            return self::formatRupiah($this->price_yearly);
        }

        return self::formatRupiah($this->price_monthly);
    }
}
