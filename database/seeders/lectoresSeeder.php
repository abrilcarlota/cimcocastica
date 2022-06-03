<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class lectoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user2= User::create([
            'name'=>'merygrd',
            'email'=>'merygrdf@gmail.com',
            'password'=>'12345678'
        ])->assignRole('lector');

        $lector1= Lector::create([
            'nombre'=>'María',
            'apellidos'=>'Guerrero Rodríguez',
            'direccion'=>'c/Alonso Quintanilla P7 5ºD',
            'user_id'=>'3'
        ]);
    }
}
