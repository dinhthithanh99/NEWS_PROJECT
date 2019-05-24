<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use File;

class userController extends Controller
{
	

 	public function showUser() {
    	$users = User::select('id','userName','img')->get()->toArray();
    	return view('Admin.User.showUser', compact('users'));
    }

    public function getDelete($id) {
		$user = User::find($id);
		File::delete('public/backend/images/'.$user->img);
		$user->delete($id);
		return back()->with('success','Xóa sản phẩm thành công!');
	}

	
   
}
