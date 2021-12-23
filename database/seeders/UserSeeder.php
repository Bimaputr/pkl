<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuar role admin/user
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Administrator";
        $adminRole->save();

        // membuat sample admin/user
        $admin = new User();
        $admin->name = 'bima';
        $admin->email = 'bima@gmail.com';
        $admin->password = Hash::make('12345678');
        $admin->save(); 
        $admin->attachRole($adminRole);
    }
}