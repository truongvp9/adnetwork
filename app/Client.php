<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    public $fillable = ['name','contact','email'];
    public $timestamps = false;
}
