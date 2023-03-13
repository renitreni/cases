<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lifted>
 */
class LiftedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'office_order_no' => $this->faker->randomNumber(1,100),
            'effective_date' => $this->faker->date('Y-m-d'),
            'officer_in_charge' => $this->faker->name(),
            'remarks' => $this->faker->paragraph()
        ];
    }
}
