<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class log extends Model
{
    protected $fillable=['client_id','data','role'];

    public function client(){
    	return $this->belongsTo('App\rent'); 
    }
}
