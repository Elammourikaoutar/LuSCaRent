<?php

namespace Database\Seeders;

Use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'EL AMMOURI',
            'tel' => '0663807748',
            'ville' => 'Marrakech',
            'email' => 'elammourikaoutar@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
            'remember_token' => Str::random(10),
            'admin'=>1
        ]);
    }
}
