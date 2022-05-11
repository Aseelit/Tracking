<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'descrbation' => $this->faker->paragraph,
            'path' => 'project/04.jpg',
            'user_id' => 1,
            'status'=>'stoping',
            'start_date',2022-05-11,
            'end_date',2022-05-12,
            'address' => $this->faker->address,
        ];
    }
}
