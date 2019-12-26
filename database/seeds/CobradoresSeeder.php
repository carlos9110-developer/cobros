<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CobradoresSeeder extends Seeder
{
    public function run()
    {
        DB::table('cobradores')->insert([
            'id_usuario' 	    =>	1,
            'cedula'	        =>  '1088008382',
            'nombre'	        =>  'Carlos Eduardo Hincapie Hidalgo',
            'direccion'         =>  'Calle 20 c',
            'celular'           =>  '3115455293',
        ]);
    }
}
