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

}