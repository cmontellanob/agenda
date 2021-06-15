<?php

namespace Database\Factories;

use App\Models\Agenda;
use Illuminate\Database\Eloquent\Factories\Factory;

class AgendaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Agenda::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sexo=array('M','F');
        return [
            'nombre' => $this->faker->name(),
            'apellidos' => $this->faker->lastName(),
            'sexo' => $sexo[rand(0,1)],
            'celular' => $this->faker->phoneNumber(),
            'direccion' => $this->faker->address

            //
        ];
    }
}
