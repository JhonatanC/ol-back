<?php

use Illuminate\Database\Seeder;
use App\Rol;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create([
            'rol' => 'administrador'
        ]);

        Rol::create([
            'rol' => 'conductor'
        ]);

        Rol::create([
            'rol' => 'recolector'
        ]);

        Rol::create([
            'rol' => 'coordinador'
        ]);

        Rol::create([
            'rol' => 'digitador cg-uno'
        ]);
    }
}
