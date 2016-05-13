<?php

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
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

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('permission_role')->truncate();
        DB::table('permissions')->truncate();
        DB::table('role_user')->truncate();
        DB::table('roles')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        /*
         * 系统权限列表
         */
        $p_merchantIndexIndex = new Permission();
        $p_merchantIndexIndex->name = "merchant_index_index";
        $p_merchantIndexIndex->display_name = "merchant index";
        $p_merchantIndexIndex->description = "Visit merchant index";
        $p_merchantIndexIndex->save();

        $p_merchantWechatIndex = new Permission();
        $p_merchantWechatIndex->name = "merchant_wechat_index";
        $p_merchantWechatIndex->display_name = "merchant wechat index";
        $p_merchantWechatIndex->description = "Visit merchant index";
        $p_merchantWechatIndex->save();

        $p_adminIndexIndex = new Permission();
        $p_adminIndexIndex->name = "admin_index_index";
        $p_adminIndexIndex->display_name = "admin dashboard index";
        $p_adminIndexIndex->description = "Visit admin dashboard index";
        $p_adminIndexIndex->save();

        $p_adminMerchantIndex = new Permission();
        $p_adminMerchantIndex->name = "admin_merchant_index";
        $p_adminMerchantIndex->display_name = "admin merchant list";
        $p_adminMerchantIndex->description = "Visit a merchant list in admin dashboard";
        $p_adminMerchantIndex->save();

        $p_adminMerchantShow = new Permission();
        $p_adminMerchantShow->name = "admin_merchant_show";
        $p_adminMerchantShow->display_name = "admin show a merchant";
        $p_adminMerchantShow->description = "Visit a merchant in admin dashboard";
        $p_adminMerchantShow->save();

        /*
         * 系统必需角色列表
         */
        $r_root = new Role();
        $r_root->name = "root";
        $r_root->display_name = "root";
        $r_root->description = "User has all privileges";
        $r_root->save();

        $r_merchant = new Role();
        $r_merchant->name = "merchant";
        $r_merchant->display_name = "merchant";
        $r_merchant->description = "User has privileges operating merchant";
        $r_merchant->save();

        /*
         * 系统必需授权
         */
        $r_merchant->attachPermission($p_merchantIndexIndex);
        $r_merchant->attachPermission($p_merchantWechatIndex);

        $u_root = User::where('name', 'root')->first();
        $u_root->attachRole($r_root);

    }
}
