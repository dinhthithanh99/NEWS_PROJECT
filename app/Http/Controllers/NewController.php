<?php

namespace App\Http\Controllers;
use App\Category;
use App\News;
use Illuminate\Http\Request;
use App\Http\Requests\NewRequest;
use App\Http\Controllers\categoryControllers;
use File;
use DB;

class NewController extends Controller
{
  
 public function getIndex() {
		$news = News::select('id','titles', 'summary', 'date_post', 'content', 'view', 'img', 'source', 'id_cate', 'created_at', 'updated_at')->orderBy('view', 'desc')->get()->toArray();
		$currently = News::where('date_post','>','2019-2-20')->orderBy('date_post','desc')->paginate(8);
		$most = News::select('id','titles', 'summary', 'date_post', 'content', 'view', 'img', 'source', 'id_cate', 'created_at', 'updated_at')->orderBy('view', 'desc')->limit(2)->get()->toArray();
		return view('user.source.index',compact('news','currently','most'));
		
	}


	public function postAddnew(NewRequest $request) {
		$new = new News();
		$file_name = $request->file('txtimage')->getClientOriginalName();
		$new->titles = $request->txttitle;
		$new->summary = $request->txtsummary;
		$new->img ='public/user/images/Images/'. $file_name;
		$new->date_post = $request->txtdate_post;
		$new->content = $request->txtcontent;
		$new->source = $request->txtsource;
		$new->view=0;
		$new->id_cate =$request->categories_id;
		$request->file('txtimage')->move('public/user/images/Images/',$file_name);
		$new->save();
		return redirect()->route('getAddNew')->with('success','Thêm new thành công!');
	}

	public function getAddNew() {
    	$categories = Category::select('id','name')->get()->toArray();
    	return view('Admin.News.addNew', compact('categories'));
    }


    	public function showNews() {
    	$news = News::select('id','titles','summary','date_post','content','view','img','source','id_cate')->get()->toArray();
    	return view('Admin.News.showNews', compact('news'));
    }

     public function getDelete($id) {
		$news = News::find($id);
		$news->delete($id);
		return back()->with('success','Xóa sản phẩm thành công!');
	}




	public function getEdit($id) {
		$cate = Category::select('id','name')->get()->toArray();
		$news = News::find($id);
		$news_img = News::findOrFail($id)->get()->toArray();
		return view('Admin.News.editNew',compact('news','cate','news_img'));
	}

	public function postEdit($id,Request $request) {
		$news = News::find($id);
		$news->titles = $request->input('txttitle');
		$img_current = 'public/user/images/Images/'. $request->input('img_current');
		$news->summary = $request->input('txtsummary');
		$news->date_post = $request->input('txtdate_post');
		$news->content = $request->input('txtcontent');
		$news->source = $request->input('txtsource');
		$news->id_cate = $request->input('categories_id');
		
		if(!empty($request->file('txtimage')))
		{
			$file_name = $request->file('txtimage')->getClientOriginalName();
			$news->img = $file_name;
			$request->file('txtimage')->move('public/user/images/Images/',$file_name);
			if(File::exists($img_current))
			{
				File::delete($img_current);
			}
		}
		$news->save();
		return redirect()->route('getshowNew')->with('success','Sửa sản phẩm thành công!');
	}
	
	
	function index()
    {
     return view('User.source.index');
    }

    function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('news')
        ->where('titles', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:absolute;left: 501px;font-size: 12px; ">';
      foreach($data as $row)
      {
       $output .= '

       <li><a href="'.route("chitiet",$row->id).'">'.$row->titles.'</a></li>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }
    }
      public function showNewssearch() {
      $news = News::select('id','titles','summary','date_post','content','view','img','source','id_cate')->get()->toArray();
      return view('Admin.News.timkiem', compact('news'));
    }

}



