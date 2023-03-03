<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\Models\About();
        $admin->title="NewsTropis";
        $admin->body="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod sapiente dolorum ipsam! Explicabo rem quae impedit minus accusantium. Quae corporis, minus eligendi molestias earum perferendis quidem totam vero optio ab?";
        $admin->bodysingkat="Aboutme";
        $admin->subtitle="Lorem Ipsum";
        $admin->save();
        //
    }
}
