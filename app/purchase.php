<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchase extends Model
{
    protected $primaryKey='purchase_id';
    protected $fillable = [
        'supplier_id','purchase_number','purchase_date','purchase_details','item_information',
        'stock_qauntity','cartoons','item_cartoon','quantity','rate','total','grand_total',
    ];
}
