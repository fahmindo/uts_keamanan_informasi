<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Major;
use App\Models\Semester;
use App\Models\Payment;

class SampleDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tambahkan Jurusan
        $majors = ['Informatika', 'Sistem Informasi', 'Teknik Komputer'];
        foreach ($majors as $name) {
            Major::firstOrCreate(['name' => $name]);
        }

        // Tambahkan Semester
        for ($i = 1; $i <= 4; $i++) {
            Semester::firstOrCreate(['name' => 'Semester ' . $i]);
        }

        // Tambahkan Mahasiswa
        $students = [
            ['name' => 'Diah Dabukke, M.Pd', 'student_number' => '20240801003'],
            ['name' => 'Drs. Kezia Rajata, S.T.', 'student_number' => '20190801008'],
            ['name' => 'Devi Handayani', 'student_number' => '20180801001'],
            ['name' => 'Rudi Hartono', 'student_number' => '20220801002'],
            ['name' => 'Nina Kartika', 'student_number' => '20200801004'],
            ['name' => 'Fahri Ramadhan', 'student_number' => '20190801005'],
            ['name' => 'Yuni Safitri', 'student_number' => '20180801006'],
            ['name' => 'Bagus Saputra', 'student_number' => '20190801007'],
            ['name' => 'Melati Lestari', 'student_number' => '20200801009'],
            ['name' => 'Toni Wijaya', 'student_number' => '20190801010'],
        ];

        foreach ($students as $student) {
            Student::firstOrCreate($student);
        }

        // Tambahkan Pembayaran
        $methods = ['Transfer Bank', 'E-Wallet', 'Kartu Kredit'];
        $amounts = [3500000, 4000000, 4500000, 5000000];

        for ($i = 0; $i < 10; $i++) {
            Payment::create([
                'student_id' => Student::inRandomOrder()->first()->id,
                'major_id' => Major::inRandomOrder()->first()->id,
                'semester_id' => Semester::inRandomOrder()->first()->id,
                'amount' => $amounts[array_rand($amounts)],
                'payment_method' => $methods[array_rand($methods)],
                'payment_date' => now()->subDays(rand(1, 180))->format('Y-m-d'),
                'note' => fake('id_ID')->sentence()
            ]);
        }
    }
}
