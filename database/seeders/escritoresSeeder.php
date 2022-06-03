<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Escritor;

class escritoresSeeder extends Seeder
{
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $user1= User::create([
                'name'=>'manuf',
                'email'=>'manuf@gmail.com',
                'password'=>'12345678'
            ])->assignRole('escritor');

            $escritor1= Escritor::create([
                'nombre'=>'Manuel',
                'apellidos'=>'Ferrero',
                'direccion'=>'c/Fernando Vela P13 1ºC',
                'user_id'=>'2'
            ]);
            
        }
}
