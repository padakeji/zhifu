<?php
/**
 * Created by PhpStorm.
 * User: atanl
 * Date: 2016/4/9
 * Time: 18:38
 */

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function index()
    {
        return view('merchant.dashboard_index', ['name' => 'atanl']);
    }

}