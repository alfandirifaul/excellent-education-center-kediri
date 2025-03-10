<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategori extends Model
{
    protected $guarded = ['id'];

    public function materi(): HasMany
    {
        return $this->hasMany(Materi::class);
    }

    public function kuis(): HasMany
    {
        return $this->hasMany(Kuis::class);
    }

    public function tugas(): HasMany
    {
        return $this->hasMany(Tugas::class);
    }

    public function getImgUrl()
    {
        return $this->thumbnail ? asset('storage/' . $this->thumbnail) : asset('img/logo/user-placeholder.png');
    }
}
