<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            'nome' => 'Hardware',
        ]);

        DB::table('categorias')->insert([
            'nome' => 'Smartphones',

        ]);

        DB::table('categorias')->insert([
            'nome' => 'Periféricos',

        ]);
        DB::table('categorias')->insert([
            'nome' => ' Análises e comparativos',

        ]);

    }
}
