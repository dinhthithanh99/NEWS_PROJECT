@extends('user.source.master')
@section('content')



<div class="container-fluid pb-4 pt-4 ">

    <div class="container " style="padding-left: 100px !important;
    padding-right: 50px !important;">
        
        <div class="row mx-0"  >
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div style="font-family: Arial !important;" class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tin Trong Ngày</div>
                </div>
                @foreach($type_news as $value)
                <div class="row pb-4">
                    <div class="col-md-5">                  
                            <div class="fh5co_news_img">
                                <img src=" {!! asset($value['img']) !!}" alt=""/>
                            </div>                           
                    </div>
                    <div class="col-md-7 animate-box" style="font-family: serif;" >
                        <a href="{!! url('chitiet',$value["id"]) !!}"class="fh5co_magna py-2">{{$value['titles']}} </a>
                        
                        <div class="fh5co_consectetur"> {{$value['summary']}} 
                        </div>
                         <a href="#" class="fh5co_mini_time py-3">{{$value['source']}} &nbsp; {{$value['date_post']}} </a>
                    </div>
                </div>
                @endforeach
                <div class="row">{{$type_news->links()}}</div>
                
            </div>
            <div style=" font-family: Arial !important; " class="col-md-3 animate-box" data-animate-effect="fadeInRight">
               
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Tin Nổi Bật</div>
                </div>
                @foreach($type_news as $value)
                <div class="row pb-3">
                    <div class="align-self-center">
                        <img src=" {!! asset($value['img']) !!}" alt="img" class="fh5co_most_trading"/>
                                     
                        <div class="most_fh5co_treding_font"> <a href="{!! url('chitiet',$value["id"]) !!}" >{{$value['titles']}}</a></div>
                        <div class="most_fh5co_treding_font_123">{{$value['source']}} &nbsp; {{$value['date_post']}} </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
    </div>
</div>









@endsection