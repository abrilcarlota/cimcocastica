<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarioadmin=User::create([
            'name'=>'Carlota',
            'email'=>'abrilcarlota2@gmail.com',
            'email_verified_at'=>now(),
            'password'=>bcrypt('imcocastica24'),
        ])->assignRole('admin');
        
      }
}
