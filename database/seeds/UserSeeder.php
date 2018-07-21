<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'name' => 'administrador',
            'email' => 'adm@userstasks.com',
            'cellphone' => '(44) 9 9817-5624',
            'birthday' => '09-11-1992',
            'password' => bcrypt('aiqsede123'),
        ]);
    }
}
