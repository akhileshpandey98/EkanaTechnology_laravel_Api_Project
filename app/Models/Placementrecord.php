<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Placementrecord extends Model
{
    protected $fillable=['studentpic','studentname','companyname','collegname','description'];
    public $timestamps = false;
}
