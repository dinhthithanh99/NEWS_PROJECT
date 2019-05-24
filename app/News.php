<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{ 
	protected $table = 'news'; // Tên của bảng trong database
    protected $guarded = ['id','titles','summary','date_post','content','view','img', 'id_cate']; // Lấy hết các trường trong bảng đó

    public function Category() {
    	return $this->hasMany('App\New','id_cate','id');
    }
    public function Comment() {
    	return $this->belongsTo('App\New','id_new','id');
    }
    public function Like() {
    	return $this->belongsTo('App\New','id_new','id');
    }
}
