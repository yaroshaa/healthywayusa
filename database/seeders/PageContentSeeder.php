<?php

namespace Database\Seeders;

use App\Models\PageContent;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_content')->delete();

        PageContent::create([
            'id' => 1,
            'language_id' => 1,
            'page_id' => 1,
            'name' => 'Home',
            'meta_name' => 'Home' ,
            'meta_keys' => 'Home' ,
            'meta_description' => 'Home',

        ]);
        PageContent::create([
            'id' => 2,
            'language_id' => 1,
            'page_id' => 2,
            'name' => 'About Us',
            'meta_name' => 'About Us',
            'meta_keys' => 'About Us',
            'meta_description' => 'About Us',

        ]);

        PageContent::create([
            'id' => 3,
            'language_id' => 1,
            'page_id' => 3,
            'name' => 'Manufacturing',
            'meta_name' => 'Manufacturing',
            'meta_keys' => 'Manufacturing',
            'meta_description' => 'Manufacturing',
        ]);

        PageContent::create([
            'id' => 4,
            'language_id' => 1,
            'page_id' => 4,
            'name' => 'Facility',
            'meta_name' => 'Facility',
            'meta_keys' => 'Facility',
            'meta_description' => 'Facility',
        ]);

        PageContent::create([
            'id' => 5,
            'language_id' => 1,
            'page_id' => 5,
            'name' => 'Quality',
            'meta_name' => 'Quality',
            'meta_keys' => 'Quality',
            'meta_description' => 'Quality',
        ]);

        PageContent::create([
            'id' => 6,
            'language_id' => 1,
            'page_id' => 6,
            'name' => 'Certificates',
            'meta_name' => 'Certificates',
            'meta_keys' => 'Certificates',
            'meta_description' => 'Certificates',
        ]);

        PageContent::create([
            'id' => 7,
            'language_id' => 1,
            'page_id' => 7,
            'name' => 'Services',
            'meta_name' => 'Services',
            'meta_keys' => 'Services',
            'meta_description' => 'Services',
        ]);

        PageContent::create([
            'id' => 8,
            'language_id' => 1,
            'page_id' => 8,
            'name' => 'Contacts',
            'meta_name' => 'Contacts',
            'meta_keys' => 'Contacts',
            'meta_description' => 'Contacts',
        ]);

    }
}
