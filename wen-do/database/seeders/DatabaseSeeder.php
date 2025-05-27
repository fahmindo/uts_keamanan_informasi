<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // <--- use statement HARUS di luar class

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Cek apakah user test@example.com sudah ada
        User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => bcrypt('password'), // Password default
            ]
        );

        // Jalankan seeder tambahan: data mahasiswa, jurusan, semester, dan pembayaran
        $this->call([
            SampleDataSeeder::class,
        ]);
    }
}
