@extends('user.source.master')
@section('content')
	<br><br>

	


	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9" style="margin-left: 10%;font-family: Arial !important;">

					
                   
                    	<div class="fh5co_news_img"><img src=" {!! asset('public/user/images/Images/'.$news['img']) !!}" /></div>
                       <h2  >{{$news['titles']}} </h3>
             
                       <h5><a href="#" >{{$news['source']}} &nbsp; {{$news['date_post']}}   </a></h5>
                        <div > {{$news['content']}} 
                        </div>
                </div>
			</div>
			<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="" data-numposts="1"></div>									
		</div>

	</div>
		
	<br><br>

	


<div>TIN TỨC LIÊN QUAN</div>
<br><br>
	<div class="container">
		<div id="content">
			 
			<div class="row">
				@foreach($news_related as $values)
				
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="font-family: Arial !important;">
						<div class="fh5co_news_img" style="width: 200px; height: 150px ><img " src=" {!! asset('public/user/images/Images/'.$values['img']) !!}" alt=""/></div>
                        <a href="single.html" ">{{$values['titles']}} </a>
					</div>
                @endforeach	
                </div>
                
			</div>		
		</div>
	</div>
		
@endsection