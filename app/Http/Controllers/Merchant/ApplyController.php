<?php
/**
 * Created by PhpStorm.
 * User: atanl
 * Date: 2016/4/13
 * Time: 23:14
 */

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Models\Merchant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class ApplyController extends Controller
{
    public function index()
    {
        return view('merchant.apply_index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'company' => 'required'
        ]);

        $merchant = new Merchant();
        $merchant->company = Input::get('company');

        Auth::user()->merchant()->save($merchant);

        if ($merchant->save())
        {
            return Redirect::to('/home');
        }
        else
        {
            return Redirect::back()->withInput()->withErrors("保存失败");
        }

    }

}