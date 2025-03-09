<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // membuat beberapa role dan default user untuk superadmin

        // membuat role
        $roleOwner = Role::create([
            'name' => 'owner'
        ]);

        $siswaRole = Role::create([
            'name' => 'siswa'
        ]);

        $guruRole = Role::create([
            'name' => 'guru'
        ]);

        // membuat permission untuk superadmin untuk mengakses semua halaman
        $userOwner = User::create([
            'name' => 'EEC Admin',
            'email' => 'admin@eec.com',
            'photo' => 'images/default.png',
            'password' => bcrypt('admin123'),
        ]);

        $userOwner->assignRole($roleOwner);
    }
}
