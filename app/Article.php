<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable=[
        'title','description','user_id','image','category_id','type_id',
    ];
   public function user(){
    return $this->belongsTo(User::class);   
   } 
  public function category(){
    return $this->belongsTo(Category::class);   
  } 
  public function type(){
    return $this->belongsTo(Type::class);   
  } 
  
}
