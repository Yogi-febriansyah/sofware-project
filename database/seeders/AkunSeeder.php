<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'nim'=>'2222233333',
            'role'=>'operator',
            'jabatan' => 'admin',
            'id_dosen' => '0',
            'password'=>bcrypt('12345'),
        ]);
    }
}
