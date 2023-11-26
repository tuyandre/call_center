<?php

namespace Database\Seeders;

use App\Models\User;
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
        //create user
        $user = new User();
        $user->name = 'Call Center';
        $user->email = 'admin@callcenter.rw';
        $user->username = 'admin_callcenter';
        $user->password = bcrypt('admin_password');
        $user->phone = '0780000000';
        $user->is_admin = true;
        $user->is_active = true;
        $user->save();
    }
}
