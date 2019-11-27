 <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{route('ShowCate')}}" class="site_title"><i class="fa fa-"></i> <span>Manager Website!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="public/backend/images/admin.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                      
                  </li>
                  <li><a href="{{route('ShowCate')}}"><i class="fa fa-edit"></i> Manage Categories </a>
                    
                  </li>
                  <li><a href="{{route('postAddNew')}}"><i class="fa fa-desktop"></i> Add News</a>
                    
                  </li>
                  <li><a href="{{route('getshowNew')}}"><i class="fa fa-table"></i> Manage News</a>
                   
                  </li>
                   <li><a><i class="fa fa-table"></i> Add News from other websit <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{!! url('getXahoi')!!}">Xã hội</a></li>
                      <li><a href="{!! url('getGiaitri')!!}">Giải trí</a></li>
                      <li><a href="{!! url('getPhapluat')!!}">Pháp luật</a></li>
                      <li><a href="{!! url('getThethao')!!}">Thể thao</a></li>
                      <li><a href="{!! url('getCongnghe')!!}">Công nghệ</a></li>
                      <li><a href="{!! url('getTamsu')!!}">Tâm sự</a></li>
                      <li><a href="{!! url('getSuckhoe')!!}">Sức khỏe</a></li>
                    </ul>
                  </li>
                  
                  
                </ul>
              </div>
            

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
           
            <!-- /menu footer buttons -->
          </div>
        </div>
