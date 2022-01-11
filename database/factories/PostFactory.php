<?php

namespace Database\Factories;

use App\Models\Blog\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{

    protected $model = Post::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()

    {
        return [
            'title' => $this->faker->realText('20'),
            'description' => $this->faker->realText('50'),
            'content' => $this->faker->realText('200'),
            'category_id' => rand(1, 10),
        ];
    }
}
