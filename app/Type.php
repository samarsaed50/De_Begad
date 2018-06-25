<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
  protected $fillable=[
     'type', 
  ];  
    public function articles(){
        return $this->hasMany('App\Article');   
       }
}
