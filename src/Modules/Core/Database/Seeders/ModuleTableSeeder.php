<?php

namespace Modules\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Core\Entities\Module;

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
            'id'            => 1,
            'name'          => 'Task',
            'description'   => 'Todoアプリのモジュール',
        ]);
    }
}
