<?php

use Illuminate\Database\Seeder;

class EmpleadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empleados')->insert([
            'nombre' => Str::random(10),
            'apellido' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'telefono' => rand(000000000,999999999),
        ]);
    }
}
