<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\profile;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        profile::create(
            [
                'names' => 'Moses Gitau',
                'status' => 'Single',
                'nationality' => 'Kenyan',
                'height' => "5'7",
                'weight' => '90',
                'age' => '22',
                'disability' => 'NA'
                // 'updated_at' => '',
                // 'created_at' => ''
            ]
        );

        profile::create(
            [
                'names' => 'Sarah Oroi',
                'status' => 'Engaged',
                'nationality' => 'Ethiopian',
                'height' => "4'9",
                'weight' => '66',
                'age' => '21',
                'disability' => 'Visually Impaired'
                // 'updated_at' => '',
                // 'created_at' => ''
            ]
        );
    }
}
