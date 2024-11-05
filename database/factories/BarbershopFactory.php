<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barbershop>
 */
class BarbershopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement([ 
                'Barbearia Vintage', 
                'Corte & Estilo', 
                'Barba & Navalha', 
                'The Dapper Den', 
                'Cabelo & Cia.', 
                'Machado & Tesoura', 
                'Barbearia Elegance', 
                'Aparência Impecável', 
                'Estilo Urbano', 
                'Estilo Clássico', 
                ]), 
            'address' => $this->faker->randomElement([ 
                'Rua da Barbearia, 123', 
                'Avenida dos Cortes, 456', 
                'Praça da Barba, 789', 
                'Travessa da Navalha, 101', 
                'Alameda dos Estilos, 202', 
                'Estrada do Machado, 303', 
                'Avenida Elegante, 404', 
                'Praça da Aparência, 505', 
                'Rua Urbana, 606', 
                'Avenida Clássica, 707', 
            ]), 
            'image_url' => $this->faker->randomElement([ 
                'https://utfs.io/f/c97a2dc9-cf62-468b-a851-bfd2bdde775f-16p.png', 
                'https://utfs.io/f/45331760-899c-4b4b-910e-e00babb6ed81-16q.png', 
                'https://utfs.io/f/5832df58-cfd7-4b3f-b102-42b7e150ced2-16r.png', 
                'https://utfs.io/f/7e309eaa-d722-465b-b8b6-76217404a3d3-16s.png', 
                'https://utfs.io/f/178da6b6-6f9a-424a-be9d-a2feb476eb36-16t.png', 
                'https://utfs.io/f/2f9278ba-3975-4026-af46-64af78864494-16u.png', 
                'https://utfs.io/f/988646ea-dcb6-4f47-8a03-8d4586b7bc21-16v.png', 
                'https://utfs.io/f/60f24f5c-9ed3-40ba-8c92-0cd1dcd043f9-16w.png', 
                'https://utfs.io/f/f64f1bd4-59ce-4ee3-972d-2399937eeafc-16x.png', 
                'https://utfs.io/f/e995db6d-df96-4658-99f5-11132fd931e1-17j.png', 
            ]),
        ];
    }
}
