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
                'image' => '/assets/photos/nagar.jpg',
            ],
            [
                'label' => 'نقاشة',
                'value' => 'nasha',
                'image' => '/assets/photos/593205.jpg',
            ],
            [
                'label' => 'تبريد وتكييف',
                'value' => 'tabreed ',
                'image' => '/assets/photos/logo-1.jpg',
            ],
            [
                'label' => 'خياطة',
                'value' => 'kheta',
                'image' => '/assets/photos/2102.i305.033_realistic_sewing_machine.jpg',
            ],
            
            [
                'label' => 'نظافة',
                'value' => 'nazafa',
                'image' => '/assets/photos/3282021.jpg',
            ],
            [
                'label' => 'كهرباء',
                'value' => 'kahrba',
                'image' => '/assets/photos/electric.jpeg',
            ],
            [
                'label' => 'حداد',
                'value' => 'hada',
                'image' => '/assets/photos/327cbb0f0a40fb045bf1e3ee611d4569.jpg',
            ],
            [
                'label' => 'تركيب بلاط',
                'value' => 'balat',
                'image' => '/assets/photos/شركة-تركيب-سيراميك-في-ابوظبي.jpg',
            ],
            [
                'label' => 'تمريض',
                'value' => 'tamreed',
                'image' => '/assets/photos/nurse-measuring-patient-blood-pressure.jpg',
            ],
            [
                'label' => 'رعاية أطفال/مسنين',
                'value' => 'chelidern',
                'image' => '/assets/photos/closeup-support-hands.jpg',
            ],
            [
                'label' => 'طبخ',
                'value' => 'food',
                'image' => '/assets/photos/2844811.jpg',
            ],
           
           
            

        ];
        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
