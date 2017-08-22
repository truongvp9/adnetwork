<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    //
    public $fillable = ['name','image_','target_','price','userid'];
    public $timestamps = false;
}
