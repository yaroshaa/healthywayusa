<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page')->delete();

        Page::create([
            'id' => 1,
            'key' => 'home',
            'status' => true
        ]);
        Page::create([
            'id' => 2,
            'key' => 'about_us',
            'status' => true
        ]);
        Page::create([
            'id' => 3,
            'key' => 'manufacturing',
            'status' => true
        ]);
        Page::create([
            'id' => 4,
            'key' => 'facility',
            'status' => true
        ]);
        Page::create([
            'id' => 5,
            'key' => 'quality',
            'status' => true
        ]);
        Page::create([
            'id' => 6,
            'key' => 'certificates',
            'status' => true
        ]);
        Page::create([
            'id' => 7,
            'key' => 'services',
            'status' => true
        ]);
        Page::create([
            'id' => 8,
            'key' => 'contacts',
            'status' => true
        ]);
    }
}
