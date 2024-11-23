<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_cover' => $this->faker->imageUrl(640, 480, 'books', true, 'Book Cover'),
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraphs(3, true),
            'primary_author' => $this->faker->name,
            'publisher' => $this->faker->company,
            'published_year' => $this->faker->year,
            'isbn' => $this->faker->isbn13,
            'loanee_id' => $this->faker->boolean(40) ? User::factory() : null,
        ];
    }
}
