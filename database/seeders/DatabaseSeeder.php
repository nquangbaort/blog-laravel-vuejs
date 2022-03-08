<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::truncate('users');
        User::create([
            'name' => 'admin',
            'email' => 'quangbaorp@gmail.com',
            'password' => Hash::make('123456a@'),
        ]);
        User::factory(10)->create();
    }
}
