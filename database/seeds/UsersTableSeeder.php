<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     =>'Ricardo Queiroz',
            'email'    =>'queirozricardo@gmail.com',
            'password' =>bcrypt('123456'),
        ]);

        User::create([
            'name'     =>'Outro Usua´rio',
            'email'    =>'outrousuario@gmail.com',
            'password' =>bcrypt('123456'),
        ]);
    }
}
