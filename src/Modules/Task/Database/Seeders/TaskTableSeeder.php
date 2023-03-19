<?php

namespace Modules\Task\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Task\Entities\Task;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::factory()->count(100)->create();
    }
}
