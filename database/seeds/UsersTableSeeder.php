<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'nama' => 'Alwi Aldiansyach',
            'email' => 'alwi@gmail.com',
            'password' => Hash::make('1234'),
            'nomor_hp' => '085891829851',
        ]);

        User::insert([
            'nama' => 'Taufik Akbar',
            'email' => 'taufik@gmail.com',
            'password' => Hash::make('1234'),
            'nomor_hp' => '085891829800',
        ]);

        User::insert([
            'nama' => 'Rizky Priyantama',
            'email' => 'rizky@gmail.com',
            'password' => Hash::make('1234'),
            'nomor_hp' => '085891829850',
        ]);
    }
}
