<?php

namespace Database\Seeders;

use App\Models\CallLogs;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // call user seeder
        $this->call(UserSeeder::class);
    }
}
