<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => config('app.admin_name'),
            'email' => config('app.admin_email'),
            'password' => Hash::make(config('app.admin_password')),
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
