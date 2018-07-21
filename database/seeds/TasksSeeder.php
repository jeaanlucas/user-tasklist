<?php

use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'title' => 'Do a orange juice',
            'status' => 'Open',
            'description' => 'Tomorrow on the morning, i want do drink a orange juice WITH A LOT OF SUGAR!!!',
        ]);
    }
}
