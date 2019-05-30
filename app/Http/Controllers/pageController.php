<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;

class pageController extends Controller
{
    public function getIndex() {
		$news = News::select('id','titles', 'summary', 'date_post', 'content', 'view', 'img', 'source', 'id_cate', 'created_at', 'updated_at')->orderBy('view', 'desc')->get()->toArray();
		$currently = News::where('date_post','>','2019-2-20')->orderBy('date_post','desc')->paginate(8);
		$most = News::select('id','titles', 'summary', 'date_post', 'content', 'view', 'img', 'source', 'id_cate', 'created_at', 'updated_at')->orderBy('view', 'desc')->limit(10)->get()->toArray();
		return view('user.source.index',compact('news','currently','most'));
		
	}


	 public function get_type_news($type){

       
    	$type_news = News::where('id_cate',$type)->get();
      
        $type = Category::all();

        $cate = Category::where('id',$type)->first();

        return view('user.source.news_type',compact('type_news','type','cate'));
    	
    }


    public function get_detail(Request $req){

        $news = News::where('id',$req->id)->first();
       	$news_related = News::where('titles','like','%'.$req->titles.'%')->limit(8)->get();
       	
    	return view('user.source.news_detail',compact('news','news_related'));
    }

    public function get_footer(){
        $most = News::select('id','titles', 'summary', 'date_post', 'content', 'view', 'img', 'source', 'id_cate', 'created_at', 'updated_at')->orderBy('view', 'desc')->limit(3)->get()->toArray();
        return view('user.pages.footer',compact('most'));
    }
    public function timkiem(Request $request){
        $titles_news= $request->titles_news;
        $tintuc=News::where('titles','like',"%$titles_news%")->orwhere('summary','like',"%$titles_news%")->take(30)->paginate(5);
        return view('User.source.timkiem',compact('tintuc','titles_news'));
    }

 }