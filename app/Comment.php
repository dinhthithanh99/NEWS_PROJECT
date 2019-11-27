<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $guarded = ['id','content','date_com','id_new','id_user'];

    public function New() {
    	return $this->hasMany('App\Comment','id_new','id');
    }
    public function Users() {
    	return $this->hasMany('App\Comment','id_user','id');
    }
}
