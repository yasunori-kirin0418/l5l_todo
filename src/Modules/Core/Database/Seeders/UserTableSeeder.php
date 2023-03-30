<?php

namespace Modules\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Core\Entities\Module;
use Modules\Core\Entities\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $module = Module::all();

        User::factory(10)->hasAttached(
            $module,
            fn () => ['enable' => fake()->boolean()]
        )->create();
    }
}
