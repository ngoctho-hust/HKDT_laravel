<?php

namespace Database\Seeders;

use App\Models\SoHoKhau;
use Illuminate\Database\Seeder;

class SoHoKhauTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SoHoKhau::factory()
            ->times(100)
            ->create();
    }
}
