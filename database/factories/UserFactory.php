<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'type' => $this->faker->randomElement([1, 0]),
            'role_id' => $this->faker->randomElement(['1', '2', '3']),
            'region' => $this->faker->randomElement(['Rabat-Salé-Kénitra', 'Casablanca-Settat', 'Marrakech-Safi', 'Fès-Meknès', 'Tanger-Tétouan-Al Hoceïma', 'Beni Mellal-Khénifra', 'Draâ-Tafilalet', 'Souss-Massa', 'Oriental', 'Laâyoune-Sakia El Hamra', 'Dakhla-Oued Ed-Dahab']),
        'ville' => $this->faker->randomElement(['Tanger', 'Tétouan', 'Al Hoceïma','Oujda']),
            'adress' => $this->faker->address,
         
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
