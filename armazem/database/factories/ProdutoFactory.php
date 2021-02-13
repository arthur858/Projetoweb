<?php

namespace Database\Factories;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigo' => $this->faker->numerify('#############'),
            'name' => $this->faker->name,
            'marca' => $this->faker->word,
            'data_de_validade' => $this->faker->numerify('##/##/####'),
        ];
    }
}
