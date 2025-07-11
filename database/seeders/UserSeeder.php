<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Ziyad Alwafie',
            'email' => 'zyalwfie@gmail.com',
            'username' => 'wafy',
            'password' => Hash::make('password'),
        ]);

        User::factory(5)->create();
    }
}
