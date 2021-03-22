<?php

namespace Database\Factories;

use App\Models\Pintura;
use Illuminate\Database\Eloquent\Factories\Factory;

class PinturaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pintura::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'color' => $this->faker->colorName,
            'color_hex' => $this->faker->hexColor,

        ];
    }
}
