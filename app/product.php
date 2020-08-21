<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $primaryKey='product_id';
    protected $fillable = [
        'product_barcode_qr_code','product_name','product_details','category_id','image',
        'product_per_cartoon','sell_price','supplier_price','model','supplier_id',
    ];
}
