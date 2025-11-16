<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Super Admin
        Admin::create([
    'name' => 'Super Admin',
    'email' => 'admin@admin.com',
    'password' => bcrypt('123456'),
]);
    }
}
