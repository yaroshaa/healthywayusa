<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->delete();

        Settings::create([
            'id' => '1',
            'admin_email' => 'yaroshaa@gmail.com',
            'facebook_link' => '',
            'twitter_link' => '',
            'instagtam_link' => '',
            'telegram_link' => '',
            'whatsapp_link' => '',
            'slack_link' => '',
            'phone_1' => '',
            'phone_2' => '',
            'phone_3' => '',
            'phone_4' => '',
            'address' => '',
            'postal_code' => '',
        ]);
    }
}
