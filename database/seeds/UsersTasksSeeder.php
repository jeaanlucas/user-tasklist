<?php

use Illuminate\Database\Seeder;

class UsersTasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_tasks')->insert([
            'user_id' => '1',
            'task_id' => '1',
        ]);
    }
}
