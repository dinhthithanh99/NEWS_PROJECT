<div class="container-fluid fh5co_footer_bg pb-3">
    <div class="container animate-box">
        <div class="row">
            <div class="col-12 spdp_right py-5"><img src="{{ asset('public/user/images/white_logo.png')}}" alt="img" class="footer_logo"/></div>
            <div class="clearfix"></div>
           
            <div class="col-12 col-md-3 col-lg-2">
                <div class="footer_main_title py-3"> Category</div>
                <ul class="footer_menu">
                     @foreach($cate as $cat)

                        <li><a href="{!! url('getType',$cat["id"]) !!}" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp;{{$cat['name']}}</a></li>
                    
                    @endforeach
                    
                    
                </ul>
            </div>
            <div class="col-12 col-md-5 col-lg-3 position_footer_relative">
                <div class="footer_main_title py-3"> Most Viewed Posts</div>
                <div class="footer_makes_sub_font"> Dec 31, 2016</div>
                <a href="#" class="footer_post pb-4"> Success is not a good teacher failure makes you humble </a>
                <div class="footer_makes_sub_font"> Dec 31, 2016</div>
                <a href="#" class="footer_post pb-4"> Success is not a good teacher failure makes you humble </a>
                <div class="footer_makes_sub_font"> Dec 31, 2016</div>
                <a href="#" class="footer_post pb-4"> Success is not a good teacher failure makes you humble </a>
                <div class="footer_position_absolute"><img src="{{ asset('public/user/images/footer_sub_tipik.png')}}" alt="img" class="width_footer_sub_img"/></div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 ">
                <div class="footer_main_title py-3"> Last Modified Posts</div>
                <a href="#" class="footer_img_post_6"><img src="{{ asset('public/user/images/allef-vinicius-108153.jpg')}}" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="{{ asset('public/user/images/32-450x260.jpg')}}" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="{{ asset('public/user/images/download (1).jpg')}}" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="{{ asset('public/user/images/science-578x362.jpg')}}" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="{{ asset('public/user/images/vil-son-35490.jpg')}}" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="{{ asset('public/user/images/zack-minor-15104.jpg')}}" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="{{ asset('public/user/images/download.jpg')}}" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="{{ asset('public/user/images/download (2).jpg')}}" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="{{ asset('public/user/images/ryan-moreno-98837.jpg')}}" alt="img"/></a>
            </div>
        </div>
       
    </div>
</div>


<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
</div>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3&appId=434074323804341&autoLogAppEvents=1"></script>
<script>
$(document).ready(function(){
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
 $('#titles_news').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         
         $.ajax({
          url:"{{ route('autocomplete.fetch') }}",
          method:"POST",
          data:{query:query},
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