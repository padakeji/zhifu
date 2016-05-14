<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function wechatAccount()
    {
        return $this->hasOne('App\Models\WechatAccount');
    }
}
