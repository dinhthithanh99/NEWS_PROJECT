
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 fh5co_padding_menu">
                <img src="{{ asset('public/user/images/logo.png')}}" alt="img" class="fh5co_logo_width"/>
            </div>
            <div class="col-12 col-md-9 align-self-center fh5co_mediya_right">
                <div class="text-center d-inline-block">
                    <form role="search" class="navbar-form navbar-left" action="timkiem" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">

                    <input type="text" name="titles_news" id="titles_news" class="form-control input-lg" placeholder="Tìm kiếm tin tức" /> <button type="submit" style="width: 80px; height: 45px" class="btn-success"> Tìm kiếm</button>
                    <div id="newsList">
                    </div>
                    
                   </div>
                    </form>  
                        
                   
                </div>
            
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
    <div class="container padding_786">
        <nav class="navbar navbar-toggleable-md navbar-light ">
            <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
            
            <div class="container animate-box fadeIn animated-fast" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a style="font-family: Serif ;" class="nav-link" href="{{route('getIndex')}}">Trang Chủ <span class="sr-only"></span></a>
                    </li>
                    @foreach($cate as $cat)
                    <li class="nav-item ">
                        <a style="font-family: Serif ; background-color: #FAFAFA;padding-left: 60px !important;" class="nav-link" href="{!! url('getType',$cat["id"]) !!}">{{$cat['name']}}<span class="sr-only"></span></a>
                    </li>
                    @endforeach
                    
                    
                </ul>
            </div>
        </nav>
    </div>
</div>