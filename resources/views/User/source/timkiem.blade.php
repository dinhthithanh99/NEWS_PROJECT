@extends('user.source.master')
@section('content')

<?php 
function doimau($str,$titles_news){
	return str_replace($titles_news,"<span style='background-color: red'>$titles_news</span>",$str);
}
?>

<div class="container-fluid pb-4 pt-4 ">

    <div class="container " style="padding-left: 100px !important;
    padding-right: 50px !important;">
        
        <div class="row mx-0"  >
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div style="font-family: Arial !important;" class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tìm kiếm: {{$titles_news}}</div>
                </div>
                @foreach($tintuc as $value)
                <div class="row pb-4">
                    <div class="col-md-5">                  
                            <div class="fh5co_news_img">
                                <img src=" {!! asset('public/user/images/Images/'.$value['img']) !!}" alt=""/>
                            </div>                           
                    </div>
                    <div class="col-md-7 animate-box" style="font-family: serif;" >
                        <a href="{!! url('chitiet',$value["id"]) !!}"class="fh5co_magna py-2">{!! doimau($value['titles'],$titles_news) !!} </a>
                        
                        <div class="fh5co_consectetur"> {!! doimau($value['summary'],$titles_news) !!}
                        </div>
                         <a href="#" class="fh5co_mini_time py-3">{{$value['source']}} &nbsp; {{$value['date_post']}} </a>
                    </div>
                </div>
                @endforeach
                
            </div>
           
        </div>
        
    </div>
</div>









@endsection