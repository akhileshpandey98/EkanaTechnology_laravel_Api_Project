<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable=['profile','name','companyname','phone','email','location'];
    public $timestamps=false;
    
}
