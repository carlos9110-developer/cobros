<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'id_cobrador'       =>  1,
            'cedula'	        =>  '1088538310',
            'nombre'	        =>  'Erika Vanessa Acevedo Acevedo',
            'direccion'         =>  'Acosma 1',
            'celular'           =>  '3115455293',
        ]);
    }
}
