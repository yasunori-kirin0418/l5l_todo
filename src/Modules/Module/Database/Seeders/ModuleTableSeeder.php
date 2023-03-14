<?php

namespace Modules\Module\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Module\Entities\Module;

class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Module::create([
            'id' => 1,
            'name' => 'Task'
        ]);
    }
}
