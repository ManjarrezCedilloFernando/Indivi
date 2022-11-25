<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\usuarios>
 */
class UsuariosFactory extends Factory
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
            'correo' =>$this->faker->Email(),
            'contraseña' => $this->faker ->password(),
            'telefono' =>$this->faker->PhoneNumber(),
            'img_perfil' => $this->faker->imageUrl(),
        ];
    }
}
