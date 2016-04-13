<?php
/**
 * Created by PhpStorm.
 * User: atanl
 * Date: 2016/4/13
 * Time: 23:14
 */

namespace App\Http\Controllers\Merchant;


use App\Http\Controllers\Controller;

class ApplyController extends Controller
{
    public function index()
    {
        return view('merchant.apply_index');
    }
}