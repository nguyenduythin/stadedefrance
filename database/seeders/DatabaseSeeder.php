<?php

namespace Database\Seeders;

use App\Models\AdminAuth;
use App\Models\Booking;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  Booking::factory(5)->create();
        AdminAuth::factory(1)->create();
    }
}
