<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    //
    public $fillable = ['name','type'];
    public $timestamps = false;
}
