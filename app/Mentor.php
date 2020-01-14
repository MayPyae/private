<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    protected $fillable=['name','phone','address','student_id'];
}
