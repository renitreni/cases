<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cases>
 */
class CasesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'sra' => $this->faker->company(),
            'suspension_date' => $this->faker->date(),
            'office_order_no' => $this->faker->numberBetween(1,1000),
            'suspension_days' => $this->faker->numberBetween(1,1000),
            'email' => $this->faker->safeEmail(),
            'employer_name' => $this->faker->name(),
            'case_officer' => $this->faker->name(),
            'sra_contact' => $this->faker->phoneNumber(),
            'worker_lastname' => $this->faker->lastName(),
            'worker_firstname'=> $this->faker->firstName(),
            'worker_middlename'=> $this->faker->lastName(),
            'atnsia_case_id' => $this->faker->numberBetween(1,1000),
            'cr_no'=> $this->faker->creditCardNumber(),
            'office_address'=> $this->faker->address(),
        ];
    }
}
