<?php
/**
 * Created by PhpStorm.
 * User: atanl
 * Date: 2016/4/13
 * Time: 23:05
 */

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index() {
        return view('home.profile_index');
    }
}