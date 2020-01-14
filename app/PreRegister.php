<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreRegister extends Model
{
    
	protected $fillable = ['personal_id','namem','namee','nrc_no','dob','grade','subject','g1_name','g1_nrc','g2_name','g2_nrc','phone','address','profile'];

	
}
