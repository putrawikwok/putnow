<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    $services = [

        ['👩‍⚕️', 'Caregiver'],
        ['🎫', 'War Ticket'],
        ['📦', 'Daily Service'],
        ['🧹', 'Cleaning Service'],
        ['💻', 'Service Laptop'],
        ['🚗', 'Driver'],
        ['📚', 'Tutor'],
        ['📸', 'Fotografer'],
        ['🎥', 'Videografer'],
        ['🍳', 'Private Chef'],

    ];

    $service = fake()->randomElement($services);

    return [

        'icon' => $service[0],

        'title' => $service[1],

        'description' => fake()->sentence(12),

    ];
}
}
