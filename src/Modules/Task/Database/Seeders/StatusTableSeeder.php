<?php

namespace Modules\Task\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Task\Entities\Status;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            'Draft',
            'Not Started',
            'In Progress',
            'Pending',
            'Done',
            'Cancelled',
        ];

        foreach ($statuses as $status) {
            Status::create([
                'name' => $status
            ]);
        }
    }
}
