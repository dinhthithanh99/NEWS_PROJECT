<?php

namespace App\Http\Controllers;
use App\Like;


use Illuminate\Http\Request;

class LikeController extends Controller
{
	
     public function showLike() {
    	$like = Like::select('id','id_new','id_user')->get()->toArray();
    	return view('Admin.Like.ShowLike', compact('like'));
    }
    
}
