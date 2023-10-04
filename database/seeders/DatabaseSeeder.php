<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        Tag::factory()->create([
            'title' => 'Красные',
            'slug' => 'red',
        ]);
        Tag::factory()->create([
            'title' => 'Белые',
            'slug' => 'white',
        ]);
        Tag::factory()->create([
            'title' => 'Розовые',
            'slug' => 'pink',
        ]);
    }
}
