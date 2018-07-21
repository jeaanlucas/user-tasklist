<?php

use Illuminate\Database\Seeder;
use App\Models\Tasks;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = new Tasks();
        $tasks->title = 'Do a orange juice';
        $tasks->status = 'Open';
        $tasks->description = 'Tomorrow on the morning, i want do drink a orange juice WITH A LOT OF SUGAR!!!';
        $tasks->save();
    }
}
