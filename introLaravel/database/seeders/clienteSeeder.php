<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nombre' => 'Juan',
                'apellido' => 'Perex',
                'correo' => 'Juan@gmail.com',
                'telefono' => '+1237894560',
            ],[
                'nombre' => 'Kevin',
                'apellido' => 'Torres',
                'correo' => 'Kevin@gmail.com',
                'telefono' => '+1237894560',
            ],[
                'nombre' => 'Maria',
                'apellido' => 'Cruz',
                'correo' => 'Maria@gmail.com',
                'telefono' => '+1237894560',
            ]]);
    }
}
