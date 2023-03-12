<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    protected Array $prority = ['low', 'mediume', 'high'];
    protected Array $status = ['opened', 'closed'];

    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'prority' => $this->prority[array_rand($this->prority, 1)],
            'status' => $this->status[array_rand($this->status, 1)]
        ];
    }
}
