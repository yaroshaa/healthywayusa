<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesIndexTableSeeder extends Seeder
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
            'user_id' => 1,
            'role_id' => 1
        ]);

        DB::table('roles')->insert([
            'id' => 2,
            'user_id' => 2,
            'role_id' => 3
        ]);


    }
}
