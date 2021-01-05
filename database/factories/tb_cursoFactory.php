<?php

namespace Database\Factories;

use App\Models\tb_curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class tb_cursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = tb_curso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom_curso' => $this->faker->sentence(),
            'precio' => $this->faker->randomElement([1100000, 3000000, 1600000]),
            'horas_duracion' => $this->faker->randomElement(['15', '80', '120']),
            'fec_inicio' => $this->faker->randomElement(['2021-03-15', '2021-01-05', '2021-05-30']),
            'fec_fin' => $this->faker->randomElement(['2022-03-15', '2022-01-05', '2022-05-30']),
            'sede' => $this->faker->randomElement(['sede 1', 'sede 2']),
            'jornada_diurna' => $this->faker->randomElement([false, true]),
            'jornada_nocturna' => $this->faker->randomElement([false, true]),
            'descripcion' => $this->faker->paragraph(15),
            'url_img' => $this->faker->randomElement(['/storage/img/cursos/prnDzElIhUUc30Zov79GQ51dtcQBGGj5F12zPE7L.png', '/storage/img/cursos/rmFnMdxo38qhMFAHcAG4kHJbMFAdZkXyT27nYCsL.png']),
        ];
    }
}
