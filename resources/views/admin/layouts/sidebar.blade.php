<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Ckreglom</p>
              <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <!-- <a href="#">
                <i class="fa fa-dashboard"></i> <span>Blog</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a> -->
              <ul class="treeview-menu">
                <li class=""><a href="{{ route('post.index') }}"><i class="fa fa-circle-o"></i> Post</a></li>
                <li class=""><a href="{{ route('category.index') }}"><i class="fa fa-circle-o"></i> Categories</a></li>
                <li class=""><a href="{{ route('tag.index') }}"><i class="fa fa-circle-o"></i> Tag</a></li>
                <li class=""><a href="{{ route('testimonial.index') }}"><i class="fa fa-circle-o"></i> Testmonials</a></li>
                <li class=""><a href="{{ route('zone.index') }}"><i class="fa fa-circle-o"></i> Zonal Area</a></li>
                <li class=""><a href="{{ route('user.index') }}"><i class="fa fa-circle-o"></i> Users</a></li>
                <li class=""><a href="{{ route('role.index') }}"><i class="fa fa-circle-o"></i> Roles</a></li>
                <li class=""><a href="{{ route('yearly.index') }}"><i class="fa fa-circle-o"></i> Yearly</a></li>
                <!-- <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li> -->
              </ul>
            </li>
           
            


          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>