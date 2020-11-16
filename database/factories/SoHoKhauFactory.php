<?php

namespace Database\Factories;

use App\Models\SoHoKhau;
use Illuminate\Database\Eloquent\Factories\Factory;

class SoHoKhauFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SoHoKhau::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'chu_ho_id' => null,
            'ngay_cap' => $this->faker->dateTimeBetween('-20 years', 'now'),
            'so_nha' => $this->faker->unique()->buildingNumber,
            'pho_ap' => $this->faker->text(20),
            'phuong_xa' => 'Bách Khoa',
            'quan_huyen' => 'Hai Bà Trưng',
    ];
    }
}
