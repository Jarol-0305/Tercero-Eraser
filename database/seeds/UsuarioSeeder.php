<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
        'usu_usuario'=>'Jstiv',
        'password'=>bcrypt('12345678'),
        'usu_cedula'=>'2200090369',
        'usu_apellido'=>'Ordoñez',
        'usu_nombre'=>'Jarol',
        'usu_correo'=>'jarol03050@gmail.com',
        'created_at'=>date('Y-m-d H:i')
        ]);
    }
}
