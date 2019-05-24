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

/*
    function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('news')
        ->where('titles', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
       $output .= '

       <li><a href="#">'.$row->titles.'</a></li>
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
*/

  /*  
   public function postView($id){
   	$news = News::find($id);
   	$news = NewController::update('update News set view = ++1  where id = ?', ['$id']);
    return back()->with('success','Xóa sản phẩm thành công!');
	}	
*/
	public function postAddnew(NewRequest $request) {
		$new = new News();
		$file_name = $request->file('txtimage')->getClientOriginalName();
		$new->titles = $request->txttitle;
		$new->summary = $request->txtsummary;
		$new->img = $file_name;
		$new->date_post = $request->txtdate_post;
		$new->content = $request->txtcontent;
		$new->source = $request->txtsource;
		$new->view=0;
		$new->id_cate =$request->categories_id;
		$request->file('txtimage')->move('public/backend/images/',$file_name);
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
		$img_current = 'public/backend/images/'. $request->input('img_current');
		$news->summary = $request->input('txtsummary');
		$news->date_post = $request->input('txtdate_post');
		$news->content = $request->input('txtcontent');
		$news->source = $request->input('txtsource');
		$news->id_cate = $request->input('categories_id');
		
		if(!empty($request->file('txtimage')))
		{
			$file_name = $request->file('txtimage')->getClientOriginalName();
			$news->img = $file_name;
			$request->file('txtimage')->move('public/backend/images/',$file_name);
			if(File::exists($img_current))
			{
				File::delete($img_current);
			}
		}
		$news->save();
		return redirect()->route('getshowNew')->with('success','Sửa sản phẩm thành công!');
	}
	/*public function getview(){
		$sessionView = Session::get($sessionKey);
    	$post = PostModel::findOrFail($postId);
    	if (!$sessionView) { //nếu chưa có session
        Session::put($sessionKey, 1); //set giá trị cho session
        $post->increment('views');
    }
	}

	 */
	
	function index()
    {
     return view('Admin.News.timkiem');
    }

    function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('news')
        ->where('titles', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
       $output .= '

       <li><a href="#">'.$row->titles.'</a></li>
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
/*
    public function index()
{
    return view('Admin.News.timkiem');
}

public function show($id)
{
    $student = News::findOrFail($id);

    $data = 'Name: ' . $student->titles 
        . '<br/>Email: ' . $student->summary 
        . '<br/>Student Code: ' . $student->id ;

    return $data;
}

public function searchByName(Request $request)
{
    $students = News::where('titles', 'like', '%' . $request->value . '%')->get();

    return response()->json($students); 
}

public function searchByEmail(Request $request)
{
    $students = Student::where('summary', 'like', '%' . $request->value . '%')->get();

    return response()->json($students); 
}*/
}



