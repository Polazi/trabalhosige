<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FranchiseOrder extends Model
{
    protected $table = "franchises_orders";

    protected $fillable = ['deliver_date', 'franchise_id', 'store_id'];
}
