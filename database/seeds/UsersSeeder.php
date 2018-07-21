<?php

use Illuminate\Database\Seeder;
use App\Models\Users;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = new Users();
        $users->name = 'administrator';
        $users->email = 'adm@userstasks.com';
        $users->cellphone = '(44) 9 9817-5624';
        $users->birthday = '09-11-1992';
        $users->password = bcrypt('adm@123');
        $users->save();
    }
}
