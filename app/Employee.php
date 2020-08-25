<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $primaryKey='employee_id';
    protected $fillable = [
        'firstname','lastname','designation','phone_number','email',
        'employee_salary','blood_group',
        'country','city','zip_code','address','image',
    ];
}
