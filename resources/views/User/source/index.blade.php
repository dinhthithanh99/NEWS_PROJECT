@extends('user.source.master')
@section('content')

<div class="container-fluid pt-3" >
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tin Mới Nhất</div>
        </div>
        <div class="owl-carousel owl-theme js" id="slider1">
              @foreach($news as $values)
            <div class="item px-2">
                <div class="fh5co_latest_trading_img_position_relative">
                    <div class="fh5co_latest_trading_img" style="height: 270px;"><img src=" {!! asset('public/user/images/Images/'.$values['img']) !!}" alt="" class="fh5co_img_special_relative"/></div>
                    <div class="fh5co_latest_trading_img_position_absolute"></div>
                    <div class="fh5co_latest_trading_img_position_absolute_1">
                        <a href="{!! url('chitiet',$values["id"]) !!}" class="text-white"> {{$values['titles']}}</a>
                        <div class="fh5co_latest_trading_date_and_name_color" style="color: red; font-weight: bold;text-align: right;font-family: Arial !important;">{{$values['source']}} &nbsp; {{$values['date_post']}}  </div>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
    </div>
</div>

<div class="container-fluid pb-4 pt-4 ">

    <div class="container " style="padding-left: 100px !important;
    padding-right: 10px !important;">
        
        <div class="row mx-0"  >
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div style="font-family: Arial !important;" class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tin Nổi Bật </div>
                </div>
                @foreach($currently as $value)
                <div class="row pb-4" >
                    <div class="col-md-5" >                  
                            <div class="fh5co_news_img">
                                <img src=" {!! asset('public/user/images/Images/'.$value['img']) !!}" alt=""/>
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
                <div class="row">{{$currently->links()}}</div>
            </div>
            <div style=" font-family: Arial !important; " class="col-md-3 animate-box" data-animate-effect="fadeInRight">
               
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Tin Nóng
                    </div>
                </div>
                <div class="row pb-3">
                     <div class="fh5co_hover_news_img">
                        <div class="fh5co_hover_news_img_video_tag_position_relative">
                            <div class="fh5co_news_img">
                                <iframe id="video_4" width="100%" height="200" src="https://www.youtube.com/embed/7bDpQykiNWI?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                            </div>
                            <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide_4">
                                <img src="images/vil-son-35490.jpg" alt="">
                            </div>
                            <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide_4" id="play-video_4">
                                <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                        <span><i class="fa fa-play"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                

                 
                @foreach($most as $value)
                <div class="row pb-3" >
                    <div class="align-self-center" >
                        <img style="height: 150px; width: 200px" src=" {!! asset('public/user/images/Images/'.$value['img']) !!}" alt="img" class="fh5co_most_trading"/>
                                     
                        <div class="most_fh5co_treding_font"> <a href="{!! url('chitiet',$value["id"]) !!}" >{{$value['titles']}}</a></div>
                        <div class="most_fh5co_treding_font_123">{{$values['source']}} &nbsp; {{$values['date_post']}} </div>
                    </div>
                </div>
                @endforeach


               
                <div class="row pb-3">
                    <div class="align-self-center">
                     
                    </div>
                </div>
               
                

              
            </div>

        </div>


        
    </div>
</div>



<script>
$(document).ready(function(){

 $('#titles_news').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#newsList').fadeIn();  
                    $('#newsList').html(data);
          }
         });
        }
    });

    $(document).on('click', 'li', function(){  
        $('#titles_news').val($(this).text());  
        $('#newsList').fadeOut();  
    });  

});
</script>
@endsection