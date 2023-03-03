<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = new \App\Models\User();
        $admin->name ="Firza";
        $admin->email="admin2@gmail.com";
        $admin->password = bcrypt('12345678');
        $admin->save();
    }
}
