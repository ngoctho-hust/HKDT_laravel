<?php

namespace Database\Factories;

use App\Models\NhanKhau;
use Illuminate\Database\Eloquent\Factories\Factory;

class NhanKhauFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NhanKhau::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ho_ten' => $this->faker->name,
            'bi_danh' => null,
            'gioi_tinh' => $this->faker->randomElement(['nam', 'nữ']),
            'ngay_sinh' => $this->faker->dateTimeBetween('-100 years', 'now'),
            'noi_sinh' => $this->faker->address,
            'nguyen_quan' => $this->faker->address,
            'dan_toc' => $this->faker->randomElement([
                'kinh',
                'thái',
                'tày',
                'mường',
                'giao',
            ]),
            'nghe_nghiep' => null,
            'noi_lam_viec' => null,
            'quan_he_voi_chu_ho' => $this->faker->randomElement(['con', 'vợ', 'cháu']),
            'thuong_tru_truoc' => null,
            'sohokhau_id' => $this->faker->numberBetween(1, 100),
        ];
    }
}
