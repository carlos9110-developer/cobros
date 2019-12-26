<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // usuario tipo cobrador
        DB::table('users')->insert([
            'usuario' 	        =>	'1088008382',
            'password'	        =>  hash("SHA256",'12345'),
            'rol'               =>  '1'
        ]);
    }
}
