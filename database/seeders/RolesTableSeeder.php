<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => 1,
            'name' => 'Admin',
            'key' => 'admin'
        ]);

        DB::table('roles')->insert([
            'id' => 2,
            'name' => 'User',
            'key' => 'user'
        ]);

        DB::table('roles')->insert([
            'id' => 3,
            'name' => 'Seo',
            'key' => 'seo'
        ]);
    }
}
