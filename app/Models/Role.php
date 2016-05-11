<?php
/**
 * Created by PhpStorm.
 * User: atanl
 * Date: 2016/4/12
 * Time: 22:49
 */

namespace App\Models;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

}