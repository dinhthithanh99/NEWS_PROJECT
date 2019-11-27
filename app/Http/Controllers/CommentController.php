<?php

namespace App\Http\Controllers;
use App\Comment;

use Illuminate\Http\Request;

class CommentController extends Controller
{
   public function showComment() {
    	$com = Comment::select('id','content','date_com','id_new','id_user')->get()->toArray();
    	return view('Admin.Comment.showComment', compact('com'));
    }
     public function getDeleteComment($id) {
		$Comment = Comment::find($id);
		$Comment->delete($id);
		return back()->with('success','Xóa sản phẩm thành công!');
	}
}
