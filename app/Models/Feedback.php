<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable=['name','file','college','feedback'];
    public $timestamps=false;
    protected $table = 'feedbacks';
}
