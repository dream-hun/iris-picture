<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Portrait Session',
                'description' => 'Professional portrait photography session perfect for individuals, couples, or families.',
                'price' => 150,
                'time' => '1 hour',
            ],
            [
                'name' => 'Wedding Package',
                'description' => 'Complete wedding day coverage including ceremony, reception, and formal portraits.',
                'price' => 2000,
                'time' => '8 hours',
            ],
            [
                'name' => 'Event Coverage',
                'description' => 'Professional photography coverage for corporate events, parties, or special occasions.',
                'price' => 500,
                'time' => '4 hours',
            ],
            [
                'name' => 'Headshot Session',
                'description' => 'Professional headshots perfect for business profiles, social media, or portfolios.',
                'price' => 100,
                'time' => '30 minutes',
            ],
            [
                'name' => 'Engagement Session',
                'description' => 'Romantic engagement photo session at your chosen location.',
                'price' => 300,
                'time' => '2 hours',
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
