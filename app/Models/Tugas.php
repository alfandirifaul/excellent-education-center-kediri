<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Tugas extends Model
{
    protected $table = 'tugas';

    protected $fillable = [
        'siswa_id',
        'guru_id',
        'kelas_id',
        'kategori_id',
        'nama',
        'deskripsi',
        'slug',
    ];

    /**
     * Get the kategori that owns the Tugas
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }

    /**
     * Get the guru that owns the Tugas
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function guru(): BelongsTo
    {
        return $this->belongsTo(Guru::class);
    }

    /**
     * Get the siswa that owns the Tugas
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class);
    }

    /**
     * Get the kelas that owns the Tugas
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class);
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
}
