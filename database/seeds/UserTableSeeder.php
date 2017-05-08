<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('users')->insert([
            
            'name'=>'Yandry Navarrete',
            'email' => 'ynavarrete',
            'password' => bcrypt('12345'),
            'tipoUsuario'=>'Administrador'
        ]);
            DB::table('users')->insert([
            
            'name'=>'Edison Solorzano',
            'email' => 'esolorzano',
            'password' => bcrypt('12345'),
            'tipoUsuario'=>'Analista'
        ]);
    }
}
