<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class TempSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p_merchantWechatIndex = new Permission();
        $p_merchantWechatIndex->name = "merchant_wechat_index";
        $p_merchantWechatIndex->display_name = "merchant wechat index";
        $p_merchantWechatIndex->description = "Visit merchant index";
        $p_merchantWechatIndex->save();


    }
}
