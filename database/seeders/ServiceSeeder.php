<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $services = [
            [
                'label' => 'سباكة',
                'value' => 'sebaka',
                'image' => '/assets/photos/wrench-flexible-connector-dark-table.jpg',
            ],
            [
                'label' => 'نجارة',
                'value' => 'negara',
                'image' => '/assets/photos/wrench-flexible-connector-dark-table.jpg',
            ],
        ];
        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
