<?php

use Illuminate\Database\Seeder;
use App\Models\UsersTasks;

class UsersTasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usersTasks = new UsersTasks();
        $usersTasks->user_id = '1';
        $usersTasks->task_id = '1';
        $usersTasks->save();
    }
}
