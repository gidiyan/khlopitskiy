<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $types = \DB::table('types')->pluck('id');
        return [
            'name' => $this->faker->unique()->word(),
            'details' => $this->faker->text($maxNbChars = 200),
            'price' => $this->faker->numberBetween(19, 499),
            'type_id' => $this->faker->randomElement($types),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
