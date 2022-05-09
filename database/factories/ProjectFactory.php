<?php

namespace Database\Factories;

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
            'path' => 'Project/web/home',
            'user_id' => 1,
            'satus'=>'stoping',
            'start_date',$this->faker->date,
            'end_date',$this->faker->date,
            'postion' => 'saudeya arbia',
            't' => 15426763287,
            'w' => 15426763287
        ];
    }
}
