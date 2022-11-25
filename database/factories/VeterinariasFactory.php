<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\servicios;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\veterinarias>
 */
class VeterinariasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'nombre_completo' =>$this->faker->name(),
            'telefono' =>$this->faker->PhoneNumber(),
            'img_perfil' =>$this->faker->imageUrl(),
            'direccion' =>$this->faker->address(),
            'servicios_id'=>servicios::all()->random()->id,
        ];
    }
}
