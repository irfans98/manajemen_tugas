<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'nama'      => 'Admin',
            'email'     => 'test@example.com',
            'jabatan'   => 'Admin',
            'password'  => Hash::make('muirfan98'),
            'is_tugas'  => false,
        ],[
            'nama'      => 'Tono',
            'email'     => 'tono@gmail.com',
            'jabatan'   => 'Karyawan',
            'password'  => Hash::make('muirfan98'),
            'is_tugas'  => false,
        ],
        );
    }
}
