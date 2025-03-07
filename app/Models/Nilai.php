<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Nilai extends Model
{
    protected $table = 'nilai';

    protected $guarded = [];

    protected $fillable = [
        'siswa_id',
        'guru_id',
        'kelas_id',
        'kuis_id',
        'nilai',
        'status',
        'slug',
    ];

    /**
     * Get the siswa associated with the Nilai
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class);
    }

    /**
     * Get the guru associated with the Nilai
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function guru(): BelongsTo
    {
        return $this->belongsTo(Guru::class);
    }

    /**
     * Get the kelas associated with the Nilai
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class);
    }

    /**
     * Get the kuis associated with the Nilai
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kuis(): BelongsTo
    {
        return $this->belongsTo(Kuis::class);
    }

    /**
     * Get the slug for the Nilai model
     *
     * @return string
     */
    public function getSlugAttribute(): string
    {
        // Use the Str::slug() helper to create a slug from the nama attribute
        return Str::slug($this->nama);
    }

}
