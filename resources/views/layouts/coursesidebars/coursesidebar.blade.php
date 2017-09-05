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

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">COURSES NAVIGATION</li>
      <!-- Optionally, you can add icons to the links -->
      <li class=" treeview">
        <a href="{{route('getDashboard', ['id'=> $course->id])}}">
          <i class="fa fa-gear"></i>
          <span class="text-info">Course Dashboard</span>
        </a>
      </li>
      <li class="treeview">
        <a href="{{route('getModules', ['id'=> $course->id])}}">
          <i class="fa fa-book"></i> <span class="text-info">Module Management</span>
          <span class="pull-right-container">

          </span>
        </a>
      </li>
      <li class="active  treeview ">
        <a href="#">
          <i class="fa fa-file-o"></i> <span class="text-info">Course Discussion/Forum</span>
          <span class="pull-right-container">

          </span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-calendar"></i> <span class="text-info">Course Assesment Management</span>
          <span class="pull-right-container">

          </span>
        </a>
      </li>
      <li class="treeview">
        <a href="{{route('news')}}">
          <i class="fa fa-calculator"></i> <span class="text-info">Announcement</span>
          <span class="pull-right-container">

          </span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa  fa-bar-chart-o (alias)"></i> <span class="text-info">Certification</span>
          <span class="pull-right-container">

          </span>
        </a>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-gamepad"></i>
          <span class="text-info">Gamification/Badges</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a class="text-info" href="{{route('getGames', ['id'=> $course->id])}}"><i class="fa fa-circle-o"></i> Games</a></li>
          <li><a class="text-info" href="{{route('getBadges', ['id'=> $course->id])}}"><i class="fa fa-circle-o"></i> Badges </a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="{{route('students', ['id'=> $course->id])}}">
          <i class="fa  fa-user"></i> <span class="text-info">User and Batch Enrollment</span>
          <span class="pull-right-container">

          </span>
        </a>1
      </li>
      <li class="treeview">
        <a href="">
          <i class="fa fa-dashboard"></i> <span class="text-info">Course Settings and Config</span>
        </a>
      </li>
      <li class="treeview">
         <a href="{{route('getQuiz', ['id'=> $course->id])}}">
          <i class="fa fa-dashboard"></i> <span class="text-info">Quiz</span>
        </a>
      </li>
      <li class="treeview">
        <a href="{{route('attendances')}}">
          <i class="fa  fa-users"></i> <span class="text-info">Attendance</span>
          <span class="pull-right-container">

          </span>
        </a>
      </li>

    </ul>
    <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
    </aside>
