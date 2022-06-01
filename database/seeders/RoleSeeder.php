<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //CREACIÓN DE LOS 3 ROLES PRESENTES
        $admin=  Role::create(['name'=>'admin']);
        $escritor=  Role::create(['name'=>'escritor']);
        $lector=  Role::create(['name'=>'lector']);

        //CREACIÓN DE ROLES GENERALES
        Permission::create(['name'=>'admin.index'])->assignRole($admin);
        Permission::create(['name'=>'admin.users'])->assignRole($admin);
        Permission::create(['name'=>'admin.escritores'])->assignRole($admin);
        Permission::create(['name'=>'admin.lectores'])->assignRole($admin);
        Permission::create(['name'=>'admin.generos'])->assignRole($admin);
        Permission::create(['name'=>'admin.libros'])->assignRole($admin);


        //PERMISOS PARA ESCRITORES
        Permission::create(['name'=>'admin.escritores.index'])->assignRole($admin);
        Permission::create(['name'=>'admin.escritores.create'])->assignRole($admin);
        Permission::create(['name'=>'admin.escritores.edit'])->assignRole($admin);
        Permission::create(['name'=>'admin.escritores.destroy'])->assignRole($admin);

        //PERMISOS PARA LECTORES
        Permission::create(['name'=>'admin.lectores.index'])->assignRole($admin);
        Permission::create(['name'=>'admin.lectores.create'])->assignRole($admin);
        Permission::create(['name'=>'admin.lectores.edit'])->assignRole($admin);
        Permission::create(['name'=>'admin.lectores.destroy'])->assignRole($admin);


        //PERMISOS PARA GÉNEROS
        Permission::create(['name'=>'admin.generos.index'])->assignRole($admin);
        Permission::create(['name'=>'admin.generos.create'])->assignRole($admin);
        Permission::create(['name'=>'admin.generos.edit'])->assignRole($admin);
        Permission::create(['name'=>'admin.generos.destroy'])->assignRole($admin);


        //PERMISOS PARA LIBROS
        Permission::create(['name'=>'admin.libros.index'])->assignRole($admin);
        Permission::create(['name'=>'admin.libros.create'])->assignRole($admin);
        Permission::create(['name'=>'admin.libros.edit'])->assignRole($admin);
        Permission::create(['name'=>'admin.libros.destroy'])->assignRole($admin);

    }
}
