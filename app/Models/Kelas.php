<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Str;

class Kelas extends Model
{
    protected $guarded = ['id'];

    /**
     * Get the related siswa
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function siswas(): HasMany
    {
        return $this->hasMany(Siswa::class);
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getSlugAttribute()
    {
        return Str::slug($this->nama);
    }

    public function price(): HasOne
    {
        return $this->hasOne(Pricing::class);
    }
}
