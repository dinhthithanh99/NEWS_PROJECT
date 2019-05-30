@extends('user.source.master')
@section('content')
	

	
<div class="container-fluid pb-4 pt-4 ">

    <div class="container " style="padding-left: 100px !important;
    padding-right: 50px !important;">
        
        <div class="row mx-0"  >
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div style="font-family: Arial !important;color: #8A0808" class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">{{$news['titles']}} </div>
                </div>
               
               
                    <div class="col-md-5">                  
                            <img style=" height: 200px; width: 230px" src=" {!! asset('public/user/images/Images/'.$news['img']) !!}" /></div>                         
                         {{$news['content']}} 
                        
                        &nbsp;<h5><a href="#" >{{$news['source']}} &nbsp; {{$news['date_post']}}   </a></h5>
                    </div>


                
              
                
           

          <div style=" font-family: Arial !important; " class="col-md-3 animate-box" data-animate-effect="fadeInRight">
               
               
              			<br>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Tin Nóng
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
                @foreach($hot_news as $value)
                <div class="row pb-3">
                    <div class="align-self-center" >
                        <img style="height: 100px" src=" {!! asset('public/user/images/Images/'.$value['img']) !!}" alt="img" class="fh5co_most_trading"/>
                                     
                        <div class="most_fh5co_treding_font"> <a href="{!! url('chitiet',$value["id"]) !!}" >{{$value['titles']}}</a></div>
                        <div class="most_fh5co_treding_font_123">{{$value['source']}} &nbsp; {{$value['date_post']}} </div>
                    </div>
                </div>
                @endforeach
          
        
    </div>
</div>

	</div>
	


	<div class="container" style="padding-left: 100px !important;
    padding-right: 100px !important;">
    <div style="font-family: Arial !important;color: #8A0808"><h4>TIN TỨC LIÊN QUAN</h4></div>
<br><br>
		<div id="content">
			 
			<div class="row" >
				@foreach($news_related as $values)
				
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="font-family: Arial !important;">
						<div class="fh5co_news_img" style="height: 170px"><img src=" {!! asset('public/user/images/Images/'.$values['img']) !!}"  /></div>
                        <a href="single.html" ">{{$values['titles']}} </a>
					</div>
                @endforeach	
                </div>
                
			</div>		
		</div>
	</div>
		
@endsection