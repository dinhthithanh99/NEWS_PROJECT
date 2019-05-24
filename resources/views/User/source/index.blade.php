@extends('user.source.master')
@section('content')

<div class="container-fluid pt-3">
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">FAMOUS</div>
        </div>
        <div class="owl-carousel owl-theme js" id="slider1">
              @foreach($news as $values)
            <div class="item px-2">
                <div class="fh5co_latest_trading_img_position_relative">
                    <div class="fh5co_latest_trading_img"><img src=" {!! asset('public/user/images/Images/'.$values['img']) !!}" alt="" class="fh5co_img_special_relative"/></div>
                    <div class="fh5co_latest_trading_img_position_absolute"></div>
                    <div class="fh5co_latest_trading_img_position_absolute_1">
                        <a href="single.html" class="text-white"> {{$values['titles']}}</a>
                        <div class="fh5co_latest_trading_date_and_name_color" style="color: red; font-weight: bold;text-align: right;">{{$values['source']}} &nbsp; {{$values['date_post']}}  </div>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
    </div>
</div>

<div class="container-fluid pb-4 pt-4 ">

    <div class="container " style="padding-left: 100px !important;
    padding-right: 50px !important;">
        
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">CURRENT NEWS</div>
                </div>
                @foreach($currently as $value)
                <div class="row pb-4">
                    <div class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src=" {!! asset('public/user/images/Images/'.$value['img']) !!}" alt=""/></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-7 animate-box">
                        <a href="single.html" class="fh5co_magna py-2">{{$value['titles']}} </a> <a href="single.html" class="fh5co_mini_time py-3">{{$value['source']}} &nbsp; {{$value['date_post']}} </a>
                        <div class="fh5co_consectetur"> {{$value['summary']}} 
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="row">{{$currently->links()}}</div>
            </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags</div>
                </div>
                <div class="clearfix"></div>
                <div class="fh5co_tags_all">
                    <a href="#" class="fh5co_tagg">Business</a>
                    <a href="#" class="fh5co_tagg">Technology</a>
                    <a href="#" class="fh5co_tagg">Sport</a>
                    <a href="#" class="fh5co_tagg">Art</a>
                    <a href="#" class="fh5co_tagg">Lifestyle</a>
                    <a href="#" class="fh5co_tagg">Three</a>
                    <a href="#" class="fh5co_tagg">Photography</a>
                    <a href="#" class="fh5co_tagg">Lifestyle</a>
                    <a href="#" class="fh5co_tagg">Art</a>
                    <a href="#" class="fh5co_tagg">Education</a>
                    <a href="#" class="fh5co_tagg">Social</a>
                    <a href="#" class="fh5co_tagg">Three</a>
                </div>
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">MOST POPULAR</div>
                </div>
                @foreach($most as $value)
                <div class="row pb-3">
                    <div class="align-self-center">
                        <img src=" {!! asset('public/user/images/Images/'.$values['img']) !!}" alt="img" class="fh5co_most_trading"/>
                    </div>
                    <div class="paddding">
                        <div class="most_fh5co_treding_font"> {{$value['titles']}}</div>
                        <div class="most_fh5co_treding_font_123">{{$values['source']}} &nbsp; {{$values['date_post']}} </div>
                    </div>
                </div>
                @endforeach
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
