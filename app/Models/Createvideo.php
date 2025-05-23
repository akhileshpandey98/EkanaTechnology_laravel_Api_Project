<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Createvideo extends Model
{
   protected $fillable=['video','title','videodesc'];
   public $timestamps=false;
}
