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
        <a href="#">
          <i class="fa fa-gear"></i>
          <span>Course Dashboard</span>
        </a>
      </li>
      <li class="treeview">
        <a href="{{route('getModules', ['id'=> $course->id])}}">
          <i class="fa fa-book"></i> <span>Module Management</span>
          <span class="pull-right-container">

          </span>
        </a>
      </li>
      <li class="treeview">
        <a href="{{route('getCourseDetail', ['id'=> $course->id])}}">
          <i class="fa  fa-bell"></i> <span>Lesson Management</span>
          <span class="pull-right-container">

          </span>
        </a>
      </li>
      <li class="active  treeview ">
        <a href="#">
          <i class="fa fa-file-o"></i> <span>Course Discussion/Forum</span>
          <span class="pull-right-container">

          </span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-calendar"></i> <span>Course Assesment Management</span>
          <span class="pull-right-container">

          </span>
        </a>
      </li>
      <li class="treeview">
        <a href="{{route('news')}}">
          <i class="fa fa-calculator"></i> <span>Announcement</span>
          <span class="pull-right-container">

          </span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa  fa-bar-chart-o (alias)"></i> <span>Certification</span>
          <span class="pull-right-container">

          </span>
        </a>
      </li>
      <li class="treeview">
        <a href="{{route('getGames', ['id'=> $course->id])}}">
          <i class="fa  fa-gamepad"></i> <span>Gamification/Badges</span>
          <span class="pull-right-container">

          </span>
        </a>
      </li>
      <li class="treeview">
        <a href="{{route('students')}}">
          <i class="fa  fa-user"></i> <span>User and Batch Enrollment</span>
          <span class="pull-right-container">

          </span>
        </a>1
      </li>
      <li class="treeview">
        <a href="">
          <i class="fa fa-dashboard"></i> <span>Course Settings and Config</span>
        </a>
      </li>
      <li class="treeview">
         <a href="{{route('getQuiz', ['id'=> $course->id])}}">
          <i class="fa fa-dashboard"></i> <span>Quiz</span>
        </a>
      </li>
      <li class="treeview">
        <a href="{{route('attendances')}}">
          <i class="fa  fa-users"></i> <span>Attendance</span>
          <span class="pull-right-container">

          </span>
        </a>
      </li>

    </ul>
    <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
    </aside>
