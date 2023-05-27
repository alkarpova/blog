<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = Category::all()->pluck('id')->toArray();
        $users = User::all()->pluck('id')->toArray();

        $name = $this->faker->sentence;
        $text = '<p>'.implode('</p><p>', $this->faker->paragraphs(50)).'</p>';

        return [
            'user_id' => $this->faker->randomElement($users),
            'category_id' => $this->faker->randomElement($categories),
            'en' => [
                'meta_title' => $name,
                'meta_description' => $this->faker->sentence,
                'name' => $name,
                'content' => $text,
            ],
            'lv' => [
                'meta_title' => $name,
                'meta_description' => $this->faker->sentence,
                'name' => $name,
                'content' => $text,
            ],
        ];
    }
}
