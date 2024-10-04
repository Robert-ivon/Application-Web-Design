<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'course_cover' => $this->faker->imageUrl(),
            'content' => $this->faker->paragraph(),
            'robotics_kit' => $this->faker->randomElement(['StarterKit', 'Educational Robotics Kit', 'Kit5']),
        ];
    }
}

