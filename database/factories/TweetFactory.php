<?php

namespace Database\Factories;

use App\Models\Tweet;
use illuminate\Database\Eloquent\Factories\Factory;
use illuminate\Support\Str;

class TweetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tweet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => '2',
            'body' => $this->faker->sentence,
        ];
    }
}
