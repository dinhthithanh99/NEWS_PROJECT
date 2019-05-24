<?php

namespace App\Http\Controllers;
use App\Category;
use Request;
use App\Http\Requests\CategoryRequest;
use Input,File;
use DB;
use Auth;

class categoryController extends Controller
{
	 public function getCategories() {
		$cate = Category::select('id','name')->get()->toArray();
		// return view('admin.products.add', ['categories_data' => $cate]);
		return view('Admin.Category.add', ['categories_data' => $cate]);
	}


	 public function postCate(CategoryRequest $request) {
    	$cate = new category();
    	//$file_name = $request->file('txtimage')->getClientOriginalName();
    	$cate->name = $request->txtname;
		$cate->save();
		return redirect()->route('cate.postAdd')->with('success','Thêm the loai thành công!');
    }
    
    public function getCate() {
    	$categories = Category::select('id','name')->get()->toArray();
    	return view('Admin.Category.showCategory', compact('categories'));
    }

     public function getDelete($id) {
		$cate = Category::find($id);
		$cate->delete($id);
		return back()->with('success','Xóa sản phẩm thành công!');
	}


// Đang sửa sản phẩm
	public function getEdit($id) {
		$cate = Category::find($id);
		return view('Admin.Category.edit',compact('cate'));
	}

	public function postEdit($id,Request $request) {
		$cate = Category::find($id);
		$cate->name = Request::input('txtname');
		$cate->save();
		return redirect()->route('ShowCate')->with('success','Sửa sản phẩm thành công!');
	}
}
