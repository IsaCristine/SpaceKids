<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Victor',
            'email' => 'victor@admin.com', 
        ]);
        User::factory()->create([
            'name' => 'Fred',
            'email' => 'frederico@admin.com',
        ]);
        User::factory()->create([
            'name' => 'Daniel',
            'email' => 'daniel@admin.com',
        ]);
        User::factory()->create([
            'name' => 'Isa',
            'email' => 'isabelly@admin.com',
        ]);

        User::factory()->count(50)->create();

    }
}
