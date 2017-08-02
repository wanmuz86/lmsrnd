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
          <p>Alexander Pierce</p>
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
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview menu-open">
          <a href="dashboard.html">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="coursebundlecategory.html">
            <i class="fa fa-files-o"></i>
            <span>Course Bundle/Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Course Category Management</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Bundle</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="courses.html">
            <i class="fa fa-share"></i> <span>Courses</span>
          </a>

        </li>
        <li class="treeview">
          <a href="people.html">
            <i class="fa fa-pie-chart"></i>
            <span>People</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> User Management</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Group Management </a></li>
          </ul>
        </li>
        <li class="treeview">
<<<<<<< HEAD
          <a href="{{route('calendar')}}">
=======
          <a href="calendar.html">
>>>>>>> 37239b0362dc801b20c3479dd08316e80b68eeec
            <i class="fa fa-calendar"></i> <span>Course Calendar and Event</span>
          </a>
        </li>
        <li class="treeview">
          <a href="generalbsdge">
            <i class="fa fa-table"></i> <span>General Gamification </span>
          </a>
        </li>
        <li>
          <a href="conversation.html">
            <i class="fa fa-envelope"></i> <span>Inbox</span>
          </a>
        </li>
        <li>
          <a href="commons.html">
            <i class="fa fa-envelope"></i> <span> Analytics and Reporting </span>
          </a>
        </li>
        <li class="active treeview">
          <a href="reports.html">
            <i class="fa fa-folder"></i> <span>Architecture and Setup</span>
          </a>
        </li>
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
