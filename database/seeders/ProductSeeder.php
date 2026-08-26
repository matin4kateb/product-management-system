<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userIds = User::query()->pluck('id');

        if ($userIds->isEmpty()) {
            $this->command?->warn('No users found; products were not seeded.');

            return;
        }

        Product::factory(50)->create([
            'user_id' => fn () => $userIds->random(),
        ]);
    }
}
