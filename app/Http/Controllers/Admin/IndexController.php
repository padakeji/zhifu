<?php
/**
 * Created by PhpStorm.
 * User: atanl
 * Date: 2016/5/7
 * Time: 22:31
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function index() {

        return view('admin.index_index');
    }

}