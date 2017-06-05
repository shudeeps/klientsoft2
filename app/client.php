<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
     protected $fillable=['full_name','email','phone_no','address','org_name'];

      public function logs(){
    	return $this->hasMany('App\log');
    }


    
}
