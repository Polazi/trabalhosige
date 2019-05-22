<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FranchiseProdOrder extends Model
{
    protected $table = "franchise_prod_orders";

    protected $fillable = ['franchise_orders_id','product_id', 'quantidade'];

}
