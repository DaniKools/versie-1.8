<?php

namespace Database\Factories;

use App\Models\Appointment;
use Illuminate\Database\Eloquent\Factories\Factory;


class AppointmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Appointment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_id' => $this->faker->numberBetween(1, 10),
            'title' => $this->faker->words(4, true),
            'description' => $this->faker->sentence(5, true),
            'appointment_date' => $this->faker->dateTimeBetween('-1 year', '+1 year'),
            'location' => $this->faker->randomElement(['Bij klant', 'Online', 'Kantoor']),
            'attendees' => implode(', ', [$this->faker->unique()->name, $this->faker->unique()->name, $this->faker->unique()->name])
        ];
    }
}


'name' => $this->faker->name,
'phone_number' => $this->faker->phoneNumber,
'school_id' => $this->faker->numberBetween(1, 5)

'name' => $this->faker->name,
'description' => $this->faker->sentence(5, true),
'date' => $this->faker->date('-1 year', '+1 year')

'name' => $this->faker->name,
'competition_id' => $this->faker->numberBetween(1, 5)