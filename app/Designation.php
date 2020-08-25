<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    protected $primaryKey='designation_id';
    protected $fillable = [
        'designation_name',
    ];
}
