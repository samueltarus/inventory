<?php

namespace App;
use App\Product;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $primaryKey='supplier_id';
    public $timestamps = true;
    protected $fillable = [
        'supplier_name','supplier_mobile','supplier_address',
        'supplier_details','previous_balance',
    ];


    public function product(){
        return $this->hasMany('App\Product');
    }
}
