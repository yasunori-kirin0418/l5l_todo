<?php

namespace Modules\User\Database\Seeders;

use Modules\User\Entities\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::unguard();
        User::factory()->count(5)->create();
    }
}
