<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Supplier;

class Product extends Model
{
    protected $primaryKey='product_id';
    public $timestamps = true;
    protected $fillable = [
        'product_barcode_qr_code','product_name','product_details','category_id','image',
        'product_per_cartoon','sell_price','supplier_price','model','supplier_id',
    ];

    public function category(){

     return $this->hasMany('App\Category');
    }

    public function supplier(){
        return $this->belongsTo('App\Supplier');
    }
}
