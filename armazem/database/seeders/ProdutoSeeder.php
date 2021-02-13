<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Produto::factory(5)->create();
            }
}
