<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
   protected $table = 'likes';
    protected $guarded = ['id','times_like','id_new','id_user'];
    

    public function New() {
    	return $this->hasMany('App\Like','id_new','id');
    }
    public function Users() {
    	return $this->hasMany('App\Like','id_user','id');
    }
}
