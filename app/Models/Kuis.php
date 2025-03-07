<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kuis extends Model
{
    protected $fillable = [
        'nama',
        'kelas_id',
        'guru_id',
        'siswa_id',
        'judul_kuis',
        'slug',
        'deskripsi',
        'soal',
        'jawaban',
        'total_waktu',
        'waktu_dimulai',
        'waktu_selesai',
        'status',
    ];

    /**
     * Get the guru that owns the kuis.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function guru(): BelongsTo
    {
        return $this->belongsTo(Guru::class);
    }

    /**
     * Get the siswa that owns the kuis.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class);
    }

    /**
     * Get the kelas that owns the kuis.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class);
    }
}
