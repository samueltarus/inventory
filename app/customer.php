<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $primaryKey='customer_id';
    protected $fillable = [
        'customer_name','customer_email','customer_phone_number','customer_address','previous_balance',
    ];
}
