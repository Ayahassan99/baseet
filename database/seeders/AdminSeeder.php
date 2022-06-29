<?php

namespace Database\Seeders;
use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'radwa samir',
            'email' => 'radwa@gmail.com',
            'password' => \Hash::make('123456789'),
            'phone' => ('01223456789'),
        ]);
    }
}
