<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users'; // Tên của bảng trong database
    protected $guarded = ['id','userName','img'];

    
    public function Comment() {
    	return $this->belongsTo('App\User','id_user','id');
    }
    public function Like() {
    	return $this->belongsTo('App\User','id_user','id');
    }

}
