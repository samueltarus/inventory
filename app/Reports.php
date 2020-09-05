<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    protected $primaryKey='report_id';
    public $timestamps = true;
    protected $fillable = [
        'reporty_type_name','supplier_mobile','supplier_address',
        'supplier_details','previous_balance',
    ];

}
