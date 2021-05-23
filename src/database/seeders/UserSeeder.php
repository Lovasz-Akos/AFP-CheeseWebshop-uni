<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory([
           'name' => 'Site Admin',
           'email' => 'admin@cheesy.test',
           'is_admin' => true
        ])->create();
        User::factory(50)->create();
    }
}
