<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'Categories';
    protected $guarded = ['id','name'];

    public function new() {
    	return $this->belongsTo('App\Category','id_cate','id');
    }
}
