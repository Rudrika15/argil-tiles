<?php

namespace Database\Seeders;
use App\Models\NewArrivals as ModelsNewArrivals;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewArrivalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsNewArrivals::insert([
            'id' => 1,
            'image' => '4054581.jpg',
            'navigate_url' => 'abc',
        ]);
    }
}
