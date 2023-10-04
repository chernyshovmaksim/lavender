<?php

namespace Database\Factories;

use App\Facades\Slug;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence();
        $slug = Slug::convert($title);

        return [
            'title' => $title,
            'slug' => $slug
        ];
    }
}
