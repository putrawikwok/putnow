<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    \App\Models\Service::insert([

        [
            'icon' => '👩‍⚕️',
            'title' => 'Caregiver',
            'description' => 'Pendamping lansia, anak, maupun pasien dengan tenaga profesional.',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'icon' => '🎫',
            'title' => 'War Ticket',
            'description' => 'Jasa war tiket konser, event, festival, dan pertandingan favoritmu.',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'icon' => '📦',
            'title' => 'Daily Service',
            'description' => 'Jasa titip, antre, belanja, hingga berbagai kebutuhan harian lainnya.',
            'created_at' => now(),
            'updated_at' => now(),
        ],

    ]);
}
}
