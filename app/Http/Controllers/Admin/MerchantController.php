<?php

/**
 * Created by PhpStorm.
 * User: atanl
 * Date: 2016/4/9
 * Time: 18:29
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Merchant;
use App\Models\Role;

class MerchantController extends Controller
{

    public function index() {

        $merchants = Merchant::all();

        return view('admin.merchant_index', ['merchants' => $merchants]);
    }

    public function show($id) {

        $merchant = Merchant::findOrFail($id);

        return view('admin.merchant_show', ['merchant' => $merchant]);

    }

    public function verify($id) {

        DB::transaction(function () use($id) {
            $merchant = Merchant::findOrFail($id);

            $merchant->verified = true;

            $merchant->save();

            $role = Role::where('name', 'merchant')->firstOrFail();

            $merchant->user->roles()->save($role);
        });

    }

}