<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cne' => $this->faker->numerify('F ###'),
            'first_name' => $this->faker->firstName(),
            'second_name' => $this->faker->lastName(),
            'age' => $this->faker->numberBetween($min = 7, $max = 20),
            'speciality' => $this->faker->word,
        ];
    }
}
