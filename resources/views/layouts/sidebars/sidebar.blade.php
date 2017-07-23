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
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->

        <li class=" treeview">
          <a href="#">
            <i class="fa fa-gear"></i>
            <span>Admin</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i>Configure/a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> Add child class</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> View as student</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i>Copy</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> Import</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> Export</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> Archive</a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> Delete</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="{{route('lessons')}}">
            <i class="fa fa-book"></i> <span>Lessons</span>
            <span class="pull-right-container">

            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{route('news')}}">
            <i class="fa  fa-bell"></i> <span>News</span>
            <span class="pull-right-container">

            </span>
          </a>
        </li>
        <li class="active  treeview ">
          <a href="{{route('assignments')}}">
            <i class="fa fa-file-o"></i> <span>Assignments</span>
            <span class="pull-right-container">

            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{route('calendar')}}">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">

            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{route('grade')}}">
            <i class="fa fa-calculator"></i> <span>Gradebook</span>
            <span class="pull-right-container">

            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{route('mastery')}}">
            <i class="fa  fa-bar-chart-o (alias)"></i> <span>Mastery</span>
            <span class="pull-right-container">

            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{route('grade')}}">
            <i class="fa  fa-server"></i> <span>Resources</span>
            <span class="pull-right-container">

            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{route('students')}}">
            <i class="fa  fa-user"></i> <span>Students</span>
            <span class="pull-right-container">

            </span>
          </a>1
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Teachers</span>
            <span class="pull-right-container">

            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{route('games')}}">
            <i class="fa  fa-gamepad"></i> <span>Games</span>
            <span class="pull-right-container">

            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{route('attendances')}}">
            <i class="fa  fa-users"></i> <span>Attendance</span>
            <span class="pull-right-container">

            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{route('forums')}}">
            <i class="fa fa-dashboard"></i> <span>Forums</span>
            <span class="pull-right-container">

            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{route('syllabus')}}">
            <i class="fa  fa-info-circle"></i> <span>Syllabus</span>
            <span class="pull-right-container">

            </span>
          </a>
        </li>

        </li>
      </ul>
      <!-- /.sidebar-menu -->
      </section>
      <!-- /.sidebar -->
      </aside>