<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $role_regular_admin = new Role;
        $role_regular_admin->name = 'admin';
        $role_regular_admin->save();

        $role_regular_user = new Role;
        $role_regular_user->name = 'User';
        $role_regular_user->save();

    }
}
