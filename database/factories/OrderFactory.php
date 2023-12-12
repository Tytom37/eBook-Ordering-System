<?php

namespace Database\Factories;

use App\Models\Ebook;
// use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ebook_id' => fake()->randomElement(Ebook::pluck('id')),
            // 'customer_id' => fake()->randomElement(Customer::pluck('id')),
            'name' => fake()->name(),
            'date_ordered' => fake()->date()
        ];
    }
}
