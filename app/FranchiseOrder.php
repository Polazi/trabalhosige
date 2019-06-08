<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FranchiseOrder extends Model
{
    protected $table = "franchises_orders";

    protected $fillable = ['deliver_date', 'franchise_id', 'store_id'];

    public function franchise(){
        return $this->belongsTo('App\Franchise');
    }

    public function store(){
        return $this->belongsTo('App\Store');
    }
}
