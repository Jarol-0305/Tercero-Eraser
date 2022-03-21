<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categorytable')->insert([
        'cat_nombre'=>'Alimentacion',
        'cat_tipo'=>'1'
        ]);
    }
}
