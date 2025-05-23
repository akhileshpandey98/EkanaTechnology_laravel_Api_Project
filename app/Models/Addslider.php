<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Addslider extends Model
{
    protected $table = 'addsliders';
    protected $fillable = ['add_slider'];
    protected $guarded=[];
    public $timestamps = false;
}
