<?php

namespace Modules\Task\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Task\Entities\Status;
use Modules\Task\Entities\Task;
use Modules\User\Entities\User;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'status_id'     => Status::all()->random()->id,
            'user_id'       => User::all()->random()->id,
            'title'         => fake()->title,
            'description'   => fake()->realText(),
        ];
    }
}

