<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->delete();

        Language::create([
            'key' => 'en',
            'name' => 'English',
            'code' => 'EN'
        ]);
        Language::create([
            'key' => 'ua',
            'name' => 'Українська',
            'code' => 'UA'
        ]);
        Language::create([
            'key' => 'ru',
            'name' => 'Русский',
            'code' => 'RU'
        ]);


    }
}
