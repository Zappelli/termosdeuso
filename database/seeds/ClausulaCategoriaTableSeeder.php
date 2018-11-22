<?php

use Illuminate\Database\Seeder;

class ClausulaCategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	ClausulaCategoria::create(['nome' => 'Quem']);
		ClausulaCategoria::create(['nome' => 'O Que']);
		ClausulaCategoria::create(['nome' => 'Quando']);
		ClausulaCategoria::create(['nome' => 'Onde']);
		ClausulaCategoria::create(['nome' => 'Como']);
    }
}
