<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        Category::create([
            'category_name' => 'Technology',
            'category_desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione veritatis corporis nisi?',
            'slug' => 'technology',
        ]);
        Category::create([
            'category_name' => 'Fiction',
            'category_desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, vero eaque. Ipsum?',
            'slug' => 'fiction',
        ]);
        Category::create([
            'category_name' => 'Personal',
            'category_desc' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus dolor possimus commodi?',
            'slug' => 'personal',
        ]);
        Category::create([
            'category_name' => 'Biography',
            'category_desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error libero nam aspernatur.',
            'slug' => 'biography',
        ]);
        Book::factory(20)->create();
    }
}
