<?php

namespace Database\Factories;

use App\Models\Stages;
use Illuminate\Database\Eloquent\Factories\Factory;

class StagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=Stages::class;
    public function definition()
    {
        return [
            'name'=>$this->faker->text
        ];
    }
}
