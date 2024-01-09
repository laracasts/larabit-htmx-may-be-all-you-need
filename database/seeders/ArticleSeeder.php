<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert([
            'title' => 'JavaScript Fundamentals',
            'description' => 'Teaching you the fundamentals of JavaScript!'
        ]);

        DB::table('articles')->insert([
            'title' => 'Advanced JavaScript',
            'description' => 'Learn more about JavaScript!'
        ]);

        DB::table('articles')->insert([
            'title' => 'Expert JavaScript Programming',
            'description' => 'You know the fundamentals and advanced concepts. Time to become an expert!'
        ]);

        DB::table('articles')->insert([
            'title' => 'Enlightened JavaScript Development',
            'description' => 'You reached the pinnacle. Only the best of the experts are here with you!'
        ]);

        DB::table('articles')->insert([
            'title' => 'JavaScript: Over 9,000',
            'description' => 'Over 9,000!'
        ]);

        DB::table('articles')->insert([
            'title' => 'PHP Fundamentals',
            'description' => 'Teaching you the fundamentals of PHP!'
        ]);

        DB::table('articles')->insert([
            'title' => 'Advanced PHP',
            'description' => 'Learn more about PHP!'
        ]);

        DB::table('articles')->insert([
            'title' => 'Expert PHP Programming',
            'description' => 'You know the fundamentals and advanced concepts. Time to become an expert!'
        ]);

        DB::table('articles')->insert([
            'title' => 'Enlightened PHP Development',
            'description' => 'You reached the pinnacle. Only the best of the experts are here with you!'
        ]);
    }
}
