<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

       Product::factory()->create([]);
       Cart::factory()->create([]);
    }
}
