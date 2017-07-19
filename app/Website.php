<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    //
    public $fillable = ['name','contact','email','link'];
    public $timestamps = false;
}
