     <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{!! url('theme/img/user2-160x160.jpg') !!}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Admin</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="@yield('setupMenu') treeview">
              <a href="#">
                <i class="fa fa-cog"></i> <span>Setup</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu p-l20">
                <li class="@yield('skillSub')"><a href="{!! route('skills.index') !!}"><i class="fa fa-signal"></i>Skills</a></li>
                <li class="@yield('catSub')"><a href="{!! route('categories.index') !!}"><i class="fa fa-folder-open-o"></i>Categories</a></li>
                <li class="@yield('degreeSub')"><a href="{!! route('degrees.index') !!}"><i class="fa fa-graduation-cap"></i>Degrees</a></li>
              </ul>
            </li>
            <li class="@yield('AclMenu') treeview">
              <a href="#">
                <i class="fa fa-cog"></i> <span>ACL</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu p-l20">
                <li class="@yield('userType')"><a href="{!! route('user.type.index') !!}"><i class="fa fa-circle-o"></i>User Type</a></li>
                <li class="@yield('permission')"><a href="{!! route('permission.index') !!}"><i class="fa fa-circle-o"></i>Permission</a></li>
                <li class="@yield('route')"><a href="{!! route('route.index') !!}"><i class="fa fa-circle-o"></i>Route</a></li>
              </ul>
            </li>

            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
