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

        $logo = [
            'img/logo/logo-sd.jpg',
            'img/logo/logo-smp.jpg',
            'img/logo/logo-sma.jpg'
        ];

        foreach ($classLevel as $index => $level) {
            Kelas::create([
                'nama' => $level,
                'logo' => $logo[$index]
            ]);
        }

    }
}
