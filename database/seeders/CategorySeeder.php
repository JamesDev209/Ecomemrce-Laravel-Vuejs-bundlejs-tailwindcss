<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::create(['name' => 'Zapatos']);
        Category::create(['name' => 'Camisetas']);
        Category::create(['name' => 'Accesorios']);
        Category::create(['name' => 'Pantalones']);
    }
}
