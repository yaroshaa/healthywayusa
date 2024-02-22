<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog')->delete();

        Blog::create([
            'id' => 1,
            'status' => true
        ]);
        Blog::create([
            'id' => 2,
            'status' => true
        ]);
        Blog::create([
            'id' => 3,
            'status' => true
        ]);
        Blog::create([
            'id' => 4,
            'status' => true
        ]);
        Blog::create([
            'id' => 5,
            'status' => true
        ]);
        Blog::create([
            'id' => 6,
            'status' => true
        ]);
        Blog::create([
            'id' => 7,
            'status' => true
        ]);
        Blog::create([
            'id' => 8,
            'status' => true
        ]);
    }
}
