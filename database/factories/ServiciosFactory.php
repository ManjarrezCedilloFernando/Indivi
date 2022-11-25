<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\usuarios;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\servicios>
 */
class ServiciosFactory extends Factory
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
            'descripcion' =>$this->faker->text(),
            'tipo' =>$this->faker->text(),
            'precio' =>$this->faker->numberBetween(1,20),
            'clave' =>$this->faker->numberBetween(1,20),
            'usuarios_id'=>usuarios::all()->random()->id,
        ];
    }
}
