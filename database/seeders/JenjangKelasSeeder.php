<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenjangKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classLevel = [
            'SD',
            'SMP',
            'SMA'
        ];

        foreach ($classLevel as $level) {
            Kelas::create([
                'nama' => $level
            ]);
        }
    }
}
