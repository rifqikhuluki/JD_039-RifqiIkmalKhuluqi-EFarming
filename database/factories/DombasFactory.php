<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dombas>
 */
class DombasFactory extends Factory
{
    protected $model = \App\Models\dombas::class;

    public function definition(): array
    {
        return [
            'id_domba'       => $this->faker->unique()->numberBetween(1, 1000),
            'rfid_tag'       => strtoupper($this->faker->bothify('RFID####')),
            'nama_domba'     => $this->faker->firstName(),
            'jenis_kelamin'  => $this->faker->randomElement(['Jantan', 'Betina']),
            'tanggal_lahir'  => $this->faker->date(),
            'ras'            => $this->faker->randomElement(['Garut', 'Merino', 'Suffolk']),
            'status'         => $this->faker->randomElement(['Hidup', 'Mati', 'Terjual']),
        ];
    }
}
