<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Administrator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Create default User to create the blog
        Administrator::create([
            'name' => 'Elkana Vinet',
            'username' => 'admin',
            'password' => Hash::make('admin'),
        ]);
    }
}
