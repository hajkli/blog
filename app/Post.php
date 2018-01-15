<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{


  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function tags()
  {
    return $this->belongsToMany('App\Tag');
  }


  public function  getCreatedAtAttribute($value){
    return date('j M Y, G:i',strtotime($value));
  }
  public function getTeaserAttribute(){
    return str_limit($this->text, 300);
  }
  public function  getRichTextAttribute(){
    return nl2br(e($this->text));
  }



}
