<div class="container-fluid fh5co_footer_bg pb-3">
    <div class="container animate-box">
        <div class="row">
            <div class="col-12 spdp_right py-5"><img src="{{ asset('public/user/images/white_logo.png')}}" alt="img" class="footer_logo"/></div>
            <div class="clearfix"></div>
           
            <div >
                <h4>Trang Thông tin điện tử</h4> 
                
                Công ty Cổ phần ABC Việt Nam
                <br>
                SĐT: 012. 345.6789
                <br>
                Địa chỉ: 99 Tô Hiến Thành - Sơn Trà - Đà  Nẵng
                <br>
                Ban quản Trị: Hồ Văn Cơ - Hoàng Thanh Vi 
                 - Cao Thị Thúy - Đinh Thị Thanh &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <br>
                Ban cố vấn: Mr.Dinh - Mr.Hieu <br>
                Đọc báo trực tuyến tại 24 News Everything.
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