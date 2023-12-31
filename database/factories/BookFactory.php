<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{

    public function definition()
    {
        return [
            'title' => $this->faker->words(mt_rand(1, 3), true),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->paragraph(mt_rand(5, 7)),
            'amount' => $this->faker->randomDigit() + 1,
            'category_id' => mt_rand(1, 4),
            'user_id' => mt_rand(1, 5),
        ];
    }
}
