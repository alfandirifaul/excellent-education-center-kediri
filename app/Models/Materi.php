<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Materi extends Model
{
    protected $table = 'materi';

    protected $fillable = [
        'kategori_id',
        'guru_id',
        'siswa_id',
        'kelas_id',
        'nama',
        'deskripsi',
        'slug',
        'thumbnail',
    ];

    /**
     * Get the kategori that owns the Materi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }

    /**
     * Get the guru that owns the Materi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function guru(): BelongsTo
    {
        return $this->belongsTo(Guru::class);
    }

    /**
     * Get the siswa that owns the Materi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class);
    }

    /**
     * Get the kelas that owns the Materi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class);
    }

    public function getSlugAttribute()
    {
        return Str::slug($this->nama);
    }

    /**
     * Get the URL of the thumbnail from the storage bucket
     *
     * @return string
     */
    public function getThumbnailUrlAttribute(): string
    {
        return Storage::url($this->thumbnail);
    }
}
