<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Franchise extends Model
{
    public function franchiseOrder(){
        return $this->hasMany('App\FranchiseOrder');
    }
}
