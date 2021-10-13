<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Karyawan',
            'email' => 'karyawan@karyawan.com',
            'password' => bcrypt('password'),
            'role' => 'karyawan',
        ]);
        User::create([
            'name' => 'Nasabah',
            'email' => 'nasabah@nasabah.com',
            'password' => bcrypt('password'),
            'role' => 'nasabah',
        ]);
    }
}
