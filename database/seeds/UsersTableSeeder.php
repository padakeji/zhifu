<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->truncate();

        /*
         * 系统的root用户，挺有所有的权限，可以执行任何操作。
         * 注：应该在系统安装时指定密码和邮箱，这里先暂时用着，等到安装模块完成再说。
         */
        $user_root = new User();
        $user_root->name = "root";
        $user_root->email = "root@padakeji.com";
        $user_root->password = bcrypt("orange");
        $user_root->save();
    }
}
