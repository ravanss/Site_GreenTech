<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@greentech.com',
            'password' => Hash::make('admin'),
            'ds_endereco' => 'Praça 19 de Janeiro',
            'nr_celular' => '11111111',
            'ic_nivel_usuario' => 1,
        ]);
    }
}
