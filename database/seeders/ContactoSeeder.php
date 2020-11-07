<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contactos')->insert([
         [
            'nombre' => 'Jorge Bucio',
            'direccion' => 'Chavinda 43',
            'telefono' => 43604571,
            'email' => 'zeta@mail'
        ],
        [
            'nombre' => 'Claudia Mendoza',
            'direccion' => 'Chavinda 43',
            'telefono' => 23104460,
            'email' => 'kavis@mail'
        ],
        ]);
    }
}
