<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable=['name','phone','address','subject','degree','biography','profile'];
}
