<?php

namespace Database\Seeders;

use App\Models\NhanKhau;
use Illuminate\Database\Seeder;

class NhanKhauTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NhanKhau::factory()
            ->times(3000)
            ->create();
    }
}
