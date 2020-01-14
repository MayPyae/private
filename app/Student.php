<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['namem','peraonal_id','grade','subject','g1_name','g2_name','address'];

   public function preregister()
{
	return $this->belongsToMany('App\PreRegister')->withTimestamps();
}


}

