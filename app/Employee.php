<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['name', 'email', 'address', 'role'];
    protected $dates = ['created_at', 'updated_at'];
}
