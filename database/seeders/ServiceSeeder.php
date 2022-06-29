<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use App\Helpers;
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
        $services = Helpers\helpers::getServices();
        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
