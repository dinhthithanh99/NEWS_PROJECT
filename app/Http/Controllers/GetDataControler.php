<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte;
use Goutte\Client;
use App\News; 

class GetDataControler extends Controller
{
    public function getXahoi(){
        $cli = new Client(); 
        $client = new Client(); 
        $guzzleclient = new \GuzzleHttp\Client([
            'timeout' => 60,
            'verify' => false,
        ]);
        $client->setClient($guzzleclient);
        $crawler = $client->request('GET', 'http://docbao.vn/xa-hoi');
        $arr1 = array();
        $arr2 = array();
        $arr3 = array();
        $arr4 = array();
        //Lấy ảnh của tin
        $crawler->filter('li a img')->each(function ($node) use(&$arr1){
            $arr1[] = $node->attr('src');
        });

        //Lấy tiêu đề trong tin
        $crawler->filter('h2 ,h3')->each(function ($node) use(&$arr2){
            $arr2[] = $node->text();
        });

        //L?y n?i dung tóm t?t tin
        $crawler->filter('div p')->each(function ($node) use(&$arr3){

            $arr3[] = $node->text();
        });
        //L?y ngày tháng gi?
        $crawler->filter('li div span')->each(function ($node) use(&$arr4){
            $arr4[] = $node->text();
        });
      
        for ($i=0; $i < sizeof($arr2) ; $i++) { 
          $new = new News;
          $new->titles = $arr2[$i];
          $new->summary = $arr2[$i].$arr2[$i];
          $new->img = $arr1[$i];
          $new->date_post = $arr4[$i];
          $new->content = $arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i];
          $new->source = "docbao.vn";
          $new->view=0;
          $new->id_cate =1;
          $new->save();
      }
$news = News::select('id','titles','summary','date_post','content','view','img','source','id_cate')->get()->toArray();
		return  view('Admin.News.showNews', compact('news'))->with('success','Get Data succesfull!');
    }


    public function getGiaitri(){
        $cli = new Client(); 
        $client = new Client(); 
        $guzzleclient = new \GuzzleHttp\Client([
            'timeout' => 60,
            'verify' => false,
        ]);
        $client->setClient($guzzleclient);
        $crawler = $client->request('GET', 'http://docbao.vn/giai-tri');
        $arr1 = array();
        $arr2 = array();
        $arr3 = array();
        $arr4 = array();
        //Lấy ảnh của tin
        $crawler->filter('li a img')->each(function ($node) use(&$arr1){
            $arr1[] = $node->attr('src');
        });

        //Lấy tiêu đề trong tin
        $crawler->filter('h2 ,h3')->each(function ($node) use(&$arr2){
            $arr2[] = $node->text();
        });

        //L?y n?i dung tóm t?t tin
        $crawler->filter('div p')->each(function ($node) use(&$arr3){

            $arr3[] = $node->text();
        });
        //L?y ngày tháng gi?
        $crawler->filter('li div span')->each(function ($node) use(&$arr4){
            $arr4[] = $node->text();
        });
      
        for ($i=0; $i < sizeof($arr2) ; $i++) { 
          $new = new News;
          $new->titles = $arr2[$i];
          $new->summary = $arr2[$i].$arr2[$i];
          $new->img = $arr1[$i];
          $new->date_post = $arr4[$i];
          $new->content = $arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i];
          $new->source = "docbao.vn";
          $new->view=0;
          $new->id_cate =2;
          $new->save();
      }
$news = News::select('id','titles','summary','date_post','content','view','img','source','id_cate')->get()->toArray();
		return  view('Admin.News.showNews', compact('news'))->with('success','Get Data succesfull!');
    }

    public function getPhapluat(){
        $cli = new Client(); 
        $client = new Client(); 
        $guzzleclient = new \GuzzleHttp\Client([
            'timeout' => 60,
            'verify' => false,
        ]);
        $client->setClient($guzzleclient);
        $crawler = $client->request('GET', 'http://docbao.vn/phap-luat');
        $arr1 = array();
        $arr2 = array();
        $arr3 = array();
        $arr4 = array();
        //Lấy ảnh của tin
        $crawler->filter('li a img')->each(function ($node) use(&$arr1){
            $arr1[] = $node->attr('src');
        });

        //Lấy tiêu đề trong tin
        $crawler->filter('h2 ,h3')->each(function ($node) use(&$arr2){
            $arr2[] = $node->text();
        });

        //L?y n?i dung tóm t?t tin
        $crawler->filter('div p')->each(function ($node) use(&$arr3){

            $arr3[] = $node->text();
        });
        //L?y ngày tháng gi?
        $crawler->filter('li div span')->each(function ($node) use(&$arr4){
            $arr4[] = $node->text();
        });
      
        for ($i=0; $i < sizeof($arr2) ; $i++) { 
          $new = new News;
          $new->titles = $arr2[$i];
          $new->summary = $arr2[$i].$arr2[$i];
          $new->img = $arr1[$i];
          $new->date_post = $arr4[$i];
          $new->content = $arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i];
          $new->source = "docbao.vn";
          $new->view=0;
          $new->id_cate =3;
          $new->save();
      }
$news = News::select('id','titles','summary','date_post','content','view','img','source','id_cate')->get()->toArray();
		return  view('Admin.News.showNews', compact('news'))->with('success','Get Data succesfull!');
    }


    public function getThethao(){
        $cli = new Client(); 
        $client = new Client(); 
        $guzzleclient = new \GuzzleHttp\Client([
            'timeout' => 60,
            'verify' => false,
        ]);
        $client->setClient($guzzleclient);
        $crawler = $client->request('GET', 'http://docbao.vn/the-thao');
        $arr1 = array();
        $arr2 = array();
        $arr3 = array();
        $arr4 = array();
        //Lấy ảnh của tin
        $crawler->filter('li a img')->each(function ($node) use(&$arr1){
            $arr1[] = $node->attr('src');
        });

        //Lấy tiêu đề trong tin
        $crawler->filter('h2 ,h3')->each(function ($node) use(&$arr2){
            $arr2[] = $node->text();
        });

        //L?y n?i dung tóm t?t tin
        $crawler->filter('div p')->each(function ($node) use(&$arr3){

            $arr3[] = $node->text();
        });
        //L?y ngày tháng gi?
        $crawler->filter('li div span')->each(function ($node) use(&$arr4){
            $arr4[] = $node->text();
        });
      
        for ($i=0; $i < sizeof($arr2) ; $i++) { 
          $new = new News;
          $new->titles = $arr2[$i];
          $new->summary = $arr2[$i].$arr2[$i];
          $new->img = $arr1[$i];
          $new->date_post = $arr4[$i];
          $new->content = $arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i];
          $new->source = "docbao.vn";
          $new->view=0;
          $new->id_cate =4;
          $new->save();
      }
$news = News::select('id','titles','summary','date_post','content','view','img','source','id_cate')->get()->toArray();
		return  view('Admin.News.showNews', compact('news'))->with('success','Get Data succesfull!');
    }

    public function getCongnghe(){
        $cli = new Client(); 
        $client = new Client(); 
        $guzzleclient = new \GuzzleHttp\Client([
            'timeout' => 60,
            'verify' => false,
        ]);
        $client->setClient($guzzleclient);
        $crawler = $client->request('GET', 'http://docbao.vn/cong-nghe');
        $arr1 = array();
        $arr2 = array();
        $arr3 = array();
        $arr4 = array();
        //Lấy ảnh của tin
        $crawler->filter('li a img')->each(function ($node) use(&$arr1){
            $arr1[] = $node->attr('src');
        });

        //Lấy tiêu đề trong tin
        $crawler->filter('h2 ,h3')->each(function ($node) use(&$arr2){
            $arr2[] = $node->text();
        });

        //L?y n?i dung tóm t?t tin
        $crawler->filter('div p')->each(function ($node) use(&$arr3){

            $arr3[] = $node->text();
        });
        //L?y ngày tháng gi?
        $crawler->filter('li div span')->each(function ($node) use(&$arr4){
            $arr4[] = $node->text();
        });
      
        for ($i=0; $i < sizeof($arr2) ; $i++) { 
          $new = new News;
          $new->titles = $arr2[$i];
          $new->summary = $arr2[$i];
          $new->img = $arr1[$i];
          $new->date_post = $arr4[$i];
          $new->content = $arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i];
          $new->source = "docbao.vn";
          $new->view=0;
          $new->id_cate =5;
          $new->save();
      }
$news = News::select('id','titles','summary','date_post','content','view','img','source','id_cate')->get()->toArray();
		return  view('Admin.News.showNews', compact('news'))->with('success','Get Data succesfull!');
    }

public function getTamsu(){
        $cli = new Client(); 
        $client = new Client(); 
        $guzzleclient = new \GuzzleHttp\Client([
            'timeout' => 60,
            'verify' => false,
        ]);
        $client->setClient($guzzleclient);
        $crawler = $client->request('GET', 'http://docbao.vn/tam-su');
        $arr1 = array();
        $arr2 = array();
        $arr3 = array();
        $arr4 = array();
        //Lấy ảnh của tin
        $crawler->filter('li a img')->each(function ($node) use(&$arr1){
            $arr1[] = $node->attr('src');
        });

        //Lấy tiêu đề trong tin
        $crawler->filter('h2 ,h3')->each(function ($node) use(&$arr2){
            $arr2[] = $node->text();
        });

        //L?y n?i dung tóm t?t tin
        $crawler->filter('div p')->each(function ($node) use(&$arr3){

            $arr3[] = $node->text();
        });
        //L?y ngày tháng gi?
        $crawler->filter('li div span')->each(function ($node) use(&$arr4){
            $arr4[] = $node->text();
        });
      
        for ($i=0; $i < sizeof($arr2) ; $i++) { 
          $new = new News;
          $new->titles = $arr2[$i];
          $new->summary = $arr2[$i];
          $new->img = $arr1[$i];
          $new->date_post = $arr4[$i];
          $new->content = $arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i];
          $new->source = "docbao.vn";
          $new->view=0;
          $new->id_cate =6;
          $new->save();
      }
$news = News::select('id','titles','summary','date_post','content','view','img','source','id_cate')->get()->toArray();
		return  view('Admin.News.showNews', compact('news'))->with('success','Get Data succesfull!');
    }

public function getSuckhoe(){
        $cli = new Client(); 
        $client = new Client(); 
        $guzzleclient = new \GuzzleHttp\Client([
            'timeout' => 60,
            'verify' => false,
        ]);
        $client->setClient($guzzleclient);
        $crawler = $client->request('GET', 'http://docbao.vn/gioi-tinh');
        $arr1 = array();
        $arr2 = array();
        $arr3 = array();
        $arr4 = array();
        //Lấy ảnh của tin
        $crawler->filter('li a img')->each(function ($node) use(&$arr1){
            $arr1[] = $node->attr('src');
        });

        //Lấy tiêu đề trong tin
        $crawler->filter('h2 ,h3')->each(function ($node) use(&$arr2){
            $arr2[] = $node->text();
        });

        //L?y n?i dung tóm t?t tin
        $crawler->filter('div p')->each(function ($node) use(&$arr3){

            $arr3[] = $node->text();
        });
        //L?y ngày tháng gi?
        $crawler->filter('li div span')->each(function ($node) use(&$arr4){
            $arr4[] = $node->text();
        });
      
        for ($i=0; $i < sizeof($arr2) ; $i++) { 
          $new = new News;
          $new->titles = $arr2[$i];
          $new->summary = $arr2[$i];
          $new->img = $arr1[$i];
          $new->date_post = $arr4[$i];
          $new->content = $arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i].$arr3[$i];
          $new->source = "docbao.vn";
          $new->view=0;
          $new->id_cate =7;
          $new->save();
      }
$news = News::select('id','titles','summary','date_post','content','view','img','source','id_cate')->get()->toArray();
		return  view('Admin.News.showNews', compact('news'))->with('success','Get Data succesfull!');
    }
}