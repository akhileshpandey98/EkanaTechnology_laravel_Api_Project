<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable=['file','name','daveloper','experience','companyname','description'];
    public $timestamps=false;
}
