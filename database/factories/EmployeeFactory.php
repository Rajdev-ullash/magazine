<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $departments = Department::pluck('id')->toArray();
        return [
            //
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'address' => $this->faker->address(),
            'birth_date' => $this->faker->date($format = 'Y-m-d', $max = now()),
            'salary' => $this->faker->numberBetween($min = 1000, $max = 20000),
            'gender' => $this->faker->randomElement($array = array('male','female','other')),
            'phone' => $this->faker->phoneNumber(),
            'department_id' => $this->faker->randomElement($departments)
        ];
    }
}