<?php
/**
 * Created by PhpStorm.
 * User: atanl
 * Date: 2016/5/13
 * Time: 17:17
 */

namespace app\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;

class WechatController extends Controller
{

    public function index()
    {
        $wechatAccount = null;
        return view('merchant.wechat_index', ['wechatAccount' => $wechatAccount]);
    }


    public function create()
    {
        return view('merchant.wechat_create');
    }

    public function store()
    {

    }


    public function show()
    {

    }


    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }

}