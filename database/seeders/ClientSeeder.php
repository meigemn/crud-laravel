<?php

namespace Database\Seeders;

use App\Models\Client, Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::factory()->count(50)->create();
    }
}
