<?php

namespace App;
use App\Product;

use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Category extends Model

{


    protected $primaryKey='category_id';
    public $timestamps = true;
    protected $fillable = [
        'category_name',
    ];



    public function product(){
        return $this->belongsTo('App\Product');
    }

}
