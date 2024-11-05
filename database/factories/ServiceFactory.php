<?php

namespace Database\Factories;

use App\Models\Barbershop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Services>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /*return [
            [ 
                'barbershop_id' => Barbershop::pluck('id')->random(), 
                'name' => 'Corte de Cabelo', 
                'description' => 'Estilo personalizado com as últimas tendências.', 
                'price' => 60.0, 
                'image_url' => 'https://utfs.io/f/0ddfbd26-a424-43a0-aaf3-c3f1dc6be6d1-1kgxo7.png', 
            ], 
            [ 
                'barbershop_id' => Barbershop::pluck('id')->random(),
                'name' => 'Barba', 
                'description' => 'Modelagem completa para destacar sua masculinidade.', 
                'price' => 40.0, 
                'image_url' => 'https://utfs.io/f/e6bdffb6-24a9-455b-aba3-903c2c2b5bde-1jo6tu.png', 
            ], 
            [ 
                'barbershop_id' => Barbershop::pluck('id')->random(),
                'name' => 'Pézinho', 
                'description' => 'Acabamento perfeito para um visual renovado.', 
                'price' => 35.0, 
                'image_url' => 'https://utfs.io/f/8a457cda-f768-411d-a737-cdb23ca6b9b5-b3pegf.png', 
            ], 
            [ 
                'barbershop_id' => Barbershop::pluck('id')->random(),
                'name' => 'Sobrancelha', 
                'description' => 'Expressão acentuada com modelagem precisa.', 
                'price' => 20.0, 
                'image_url' => 'https://utfs.io/f/2118f76e-89e4-43e6-87c9-8f157500c333-b0ps0b.png', 
            ], 
            [ 
                'barbershop_id' => Barbershop::pluck('id')->random(),
                'name' => 'Massagem', 
                'description' => 'Relaxe com uma massagem revigorante.', 
                'price' => 50.0, 
                'image_url' => 'https://utfs.io/f/c4919193-a675-4c47-9f21-ebd86d1c8e6a-4oen2a.png', 
            ], 
            [ 
                'barbershop_id' => Barbershop::pluck('id')->random(),
                'name' => 'Hidratação', 
                'description' => 'Hidratação profunda para cabelo e barba.', 
                'price' => 25.0, 
                'image_url' => 'https://utfs.io/f/2f9278ba-3975-4026-af46-64af78864494-16u.png', 
            ],
        ];*/

        return [
            'barbershop_id' => Barbershop::pluck('id')->random(), 
            'name' => $this->faker->randomElement([ 
                'Corte de Cabelo', 
                'Barba', 
                'Pézinho', 
                'Sobrancelha', 
                'Massagem', 
                'Hidratação', 
                'Tratamento Capilar', 
                'Corte Infantil', 
                'Lavagem', 
                'Tonalização' 
            ]), 
            'description' => $this->faker->randomElement([ 
                'Estilo personalizado com as últimas tendências.', 
                'Modelagem completa para destacar sua masculinidade.', 
                'Acabamento perfeito para um visual renovado.', 
                'Expressão acentuada com modelagem precisa.', 
                'Relaxe com uma massagem revigorante.', 
                'Hidratação profunda para cabelo e barba.', 
                'Tratamento especial para o seu cabelo.', 
                'Corte especial para os pequenos.', 
                'Lavagem completa e revigorante.', 
                'Tonalização para um visual mais vibrante.' 
            ]), 
            'price' => $this->faker->randomFloat(2, 20, 100), // Generating random price between 20.0 and 100.0 
            'image_url' => $this->faker->randomElement([ 
                'https://utfs.io/f/0ddfbd26-a424-43a0-aaf3-c3f1dc6be6d1-1kgxo7.png', 
                'https://utfs.io/f/e6bdffb6-24a9-455b-aba3-903c2c2b5bde-1jo6tu.png', 
                'https://utfs.io/f/8a457cda-f768-411d-a737-cdb23ca6b9b5-b3pegf.png', 
                'https://utfs.io/f/2118f76e-89e4-43e6-87c9-8f157500c333-b0ps0b.png', 
                'https://utfs.io/f/c4919193-a675-4c47-9f21-ebd86d1c8e6a-4oen2a.png', 
                'https://utfs.io/f/5c89f046-80cd-4443-89df-211de62b7c2a-17p.png', 
                'https://utfs.io/f/23d9c4f7-8bdb-40e1-99a5-f42271b7404a-17q.png', 
                'https://utfs.io/f/9f0847c2-d0b8-4738-a673-34ac2b9506ec-17r.png', 
                'https://utfs.io/f/07842cfb-7b30-4fdc-accc-719618dfa1f2-17s.png', 
                'https://utfs.io/f/0522fdaf-0357-4213-8f52-1d83c3dcb6cd-18e.png' 
            ]),
        ];
    }
}
