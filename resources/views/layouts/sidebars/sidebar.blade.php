<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

<!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          {{ HTML::image('img/user2-160x160.jpg', 'User Image',  array('class' => 'img-circle')) }}
        </div>
        <div class="pull-left info">
          <p> {{$user->name}}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
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

      <!-- sidebar menu: : style can be found in s
      idebar.less -->
      <ul class="sidebar-menu " data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview menu-open ">
          <a href="{{route('dashboard')}}">
            <i class="fa fa-dashboard"></i> <span class="text-info">Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="coursebundlecategory.html">
            <i class="fa fa-files-o"></i>
            <span class="text-info">Course Bundle/Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a class="text-info" href="{{route('categories')}}"><i class="fa fa-circle-o"></i> Course Category Management</a></li>
            <li><a class="text-info" href="{{route('bundle')}}"><i class="fa fa-circle-o"></i> Bundle</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="{{route('courses')}}">
            <i class="fa fa-share"></i> <span class="text-info">Courses</span>
          </a>

        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span class="text-info">People</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a class="text-info" href="{{route('newusers')}}"><i class="fa fa-circle-o"></i> User Management</a></li>
            <li><a class="text-info" href="{{route('groups')}}"><i class="fa fa-circle-o"></i> Group Management </a></li>
            <li><a class="text-info" href="{{route('batches')}}"><i class="fa fa-circle-o"></i> Batch Management </a></li>
            <li><a class="text-info" href="{{route('companies')}}"><i class="fa fa-circle-o"></i> Company Management </a></li>
            <li><a class="text-info" href="{{route('countries')}}"><i class="fa fa-circle-o"></i> Country Management </a></li>
          </ul>
        </li>
        <li class="treeview">

          <a href="{{route('calendar')}}">

            <i class="fa fa-calendar"></i> <span class="text-info">Course Calendar and Event</span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{route('generalGamification')}}">
            <i class="fa fa-table"></i> <span class="text-info">General Gamification </span>
          </a>
        </li>
        <li>
          <a href="{{route('inbox')}}">
            <i class="fa fa-envelope"></i> <span class="text-info">Inbox</span>
          </a>
        </li>
        <li>
          <a href="{{route('analyticsReporting')}}">
            <i class="fa fa-envelope"></i> <span class="text-info"> Analytics and Reporting </span>
          </a>
        </li>
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
