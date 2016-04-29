<?php

use App\User;
use Illuminate\Database\Seeder;

class EntrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table("users")->delete();

        $user_root = new User();
        $user_root->name = "root";
        $user_root->email = "root@padakeji.com";
        $user_root->password = bcrypt("orange");
        $user_root->save();

        DB::table("permissions")->delete();

        $permission_merchant = new \App\Permission();
        $permission_merchant->name = "merchant";
        $permission_merchant->display_name = "merchant index";
        $permission_merchant->description = "Visit merchant index";
        $permission_merchant->save();

        DB::table('roles')->delete();
        $role_root = new \App\Role();
        $role_root->name = "root";
        $role_root->display_name = "root";
        $role_root->description = "User has all privileges";
        $role_root->save();

        $user_root->attachRole($role_root);

    }
}
