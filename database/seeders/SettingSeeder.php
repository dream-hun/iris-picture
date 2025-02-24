<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'title' => 'Iris Picture',
                'mobile' => '+1 (555) 123-4567',
                'email' => 'irispicture001@gmail.com',
                'address' => '123 Main Street, New York, NY 10001',
                'instagram' => 'https://www.instagram.com/irispicture',
                'tiktok' => 'https://www.tiktok.com/@irispicture',
                'facebook' => 'https://www.facebook.com/irispicture',
                'twitter' => 'https://www.twitter.com/irispicture',
                'youtube' => 'https://www.youtube.com/irispicture',
            ],

        ];
        Setting::insert($settings);
    }
}
