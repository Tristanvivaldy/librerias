<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    public function definition()
    {
        return [
            'category_name' => $this->faker->word(),
            'category_desc' => $this->faker->paragraph(1),
            'slug' => $this->faker->slug(),
        ];
    }
}
