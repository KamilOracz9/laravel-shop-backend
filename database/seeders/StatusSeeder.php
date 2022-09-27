<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create(['name' => 'Niezrealizowane', 'slug' => 'niezrealizowane']);
        Status::create(['name' => 'Zrealizowane', 'slug' => 'zrealizowane']);
        Status::create(['name' => 'W trakcie realizacji', 'slug' => 'w-trakcie-realizacji']);
    }
}
