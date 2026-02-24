<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeaturesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('tbl_features')->insert([
            ['name' => 'Model', 'description' => 'Intermediary between application and database, represents data and business logic.'],
            ['name' => 'View', 'description' => 'Represents UI, responsible for presenting data and receiving user input.'],
            ['name' => 'Controller', 'description' => 'Intermediary between Model and View.'],
            ['name' => 'Routes', 'description' => 'Web URLs within application users can go to.'],
            ['name' => 'Middleware', 'description' => 'Intercepts and processses HTTP requests.'],
            ['name' => 'Blade Templates', 'description' => 'A templating engine for building dynamic and reusable components.'],
            ['name' => 'Migrations', 'description' => 'Similar to a version control system for databases.'],
            ['name' => 'Seeders', 'description' => 'Responsible for populating database with data, whether fake or not.'],
            ['name' => 'Database', 'description' => 'Digital repository for storing, organizing, and retrieving data (often relational databases).'],
            ['name' => 'Eloquent ORM', 'description' => 'Object-Relational Mapping, provides an object-oriented interface that simplifies interaction with database using Eloquent models.'],
        ]);
    }
}
