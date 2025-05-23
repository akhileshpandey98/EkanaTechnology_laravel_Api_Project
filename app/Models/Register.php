<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
  protected $fillable=['name','phone','subject','technologies','coursename','optionsession','fathername','email','college','amount'];
  public $timestamps=false;
}
