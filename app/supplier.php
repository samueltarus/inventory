<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    protected $primaryKey='supplier_id';
    protected $fillable = [
        'supplier_name','supplier_mobile','supplier_address',
        'supplier_details','previous_balance',
    ];
}
