<?php

namespace Database\Factories;

use App\Models\CallLogs;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CallLogsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CallLogs::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'caller_id' => $this->faker->uuid(),
            'client_phone' => $this->faker->phoneNumber(),
            'client_name' => $this->faker->name(),
            'type' => $this->faker->randomElement(['OUTGOING', 'INCOMING', 'MISSED']),
            'date' => $this->faker->dateTimeInInterval('-3 weeks', '+3 weeks'),
            'duration' => $this->faker->time('00:i:s'),
        ];
    }
}
