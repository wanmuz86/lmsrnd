@extends('layouts.master')
@section('content')
  <section class="content-header">
  <h1>
        Mastery
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>


    <section class="content">
      <div class="col-md-12">
        <!-- Custom Tabs (Pulled to the right) -->
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs ">
            <li class="active"><a href="#tab_1" data-toggle="tab">Students</a></li>
            <li><a href="#tab_2" data-toggle="tab">Curriculum</a></li>
            <li><a href="#tab_3" data-toggle="tab">Coverage</a></li>
            <li><a href="#tab_4" data-toggle="tab">Rules</a></li>
            <li><a href="#tab_5" data-toggle="tab">Options</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
              <div class="box">
                <div class="box-header">
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      Students By First Name<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#"></a>Students By First Name</li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Students By Last Name</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Students By ID</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Students By Grade</a></li>
                    </ul>
                  </li>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Rendering engine</th>
                      <th>Browser</th>
                      <th>Platform(s)</th>
                      <th>Engine version</th>
                      <th>CSS grade</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 4.0
                      </td>
                      <td>Win 95+</td>
                      <td> 4</td>
                      <td>X</td>
                    </tr>
                    <tr>
                      <td>Other browsers</td>
                      <td>All others</td>
                      <td>-</td>
                      <td>-</td>
                      <td>U</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>Rendering engine</th>
                      <th>Browser</th>
                      <th>Platform(s)</th>
                      <th>Engine version</th>
                      <th>CSS grade</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_2">
              <h3 class="text-info"> Curriculum  </h3>
                <h4>Curriculum: Digital Photography</h4>
                <!-- /.row -->
                <div class="row">
                  <div class="col-xs-12">
                    <div class="box">
                      <div class="box-header">
                        <h3 class="box-title">Responsive Hover Table</h3>

                        <div class="box-tools">
                          <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                            <div class="input-group-btn">
                              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                          <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Reason</th>
                          </tr>
                          <tr>
                            <td>183</td>
                            <td>John Doe</td>
                            <td>11-7-2014</td>
                            <td><span class="label label-success">Approved</span></td>
                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                          </tr>
                          <tr>
                            <td>219</td>
                            <td>Alexander Pierce</td>
                            <td>11-7-2014</td>
                            <td><span class="label label-warning">Pending</span></td>
                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                          </tr>
                          <tr>
                            <td>657</td>
                            <td>Bob Doe</td>
                            <td>11-7-2014</td>
                            <td><span class="label label-primary">Approved</span></td>
                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                          </tr>
                          <tr>
                            <td>175</td>
                            <td>Mike Doe</td>
                            <td>11-7-2014</td>
                            <td><span class="label label-danger">Denied</span></td>
                            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                          </tr>
                        </table>
                      </div>
                      <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                  </div>
                </div>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_3">

              <h3 class="text-info">Coverage</h3>
              <p>Here is how the class covers the proficiencies in its curriculum: Digital Photography</p>
            </div>
            <div class="tab-pane" id="tab_4">
              <h3>Rules</h3>
              <p>This is the area where you can add actions that should be taken automatically when students drop below a threshold for certain proficiencies for a specified number of days. You can use this feature to automatically send them recommendations on how to improve in that area, or to alert you so you can help the student.</p>
            </div>
            <div class="tab-pane" id="tab_5">
              <div class="row">
              <div class="form-body col-sm-12">
                <h3 class="text-info">Options</h3>
                <table class="table table-hover">
                  <tr class="bg-info">
                    <th>Feature</th>
                    <th></th>

                  </tr>
                  <tr>
                    <td>Show mastery to student</td>
                    <td><input type="checkbox"></td>
                  </tr>
                  <tr>
                    <td>Mastery disply</td>
                    <td>  <select name="samplecondition" class="form-control select-sm" >
                         <option value=""></option>
                         <option value=""></option>
                         <option value=""></option>

                      </select></td>
                    </tr>
                  <tr>
                    <td>Mastery calculation</td>
                    <td>  <select name="samplecondition" class="form-control select-sm" >
                         <option value=""></option>
                         <option value=""></option>
                         <option value=""></option>

                      </select></td>
                    </tr>
                  <tr>
                    <td>Show student the proficiencies for  each lesson and assignment</td>
                    <td><input type="checkbox"></td>
                  </tr>
                  <tr>
                    <td>Allow assignment submissions to be tagged with proficiencies</td>
                    <td><input type="checkbox"></td>
                  </tr>
                </table>
              </div>
              <div class="form-body ">
                <div class="col-sm-6">
                  <h3 class="text-info">Mapping</h3>
                  <table class="table table-hover">
                    <tr class="bg-info">
                      <th>Name</th>
                      <th>Minimum%</th>
                      <th>Color</th>
                    </tr>
                    <tr>
                      <td>Good</td>
                      <td>80</td>
                      <td class="bg-green"></td>
                    </tr>
                    <tr>
                      <td>Fair</td>
                      <td>60</td>
                      <td class="bg-yellow"></td>
                      </tr>
                    <tr>
                      <td>Poor</td>
                      <td>0</td>
                      <td class="bg-red"></td>
                      </tr>
                  </table>
                </div>
              </div>
              </div>

            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div>
        <!-- nav-tabs-custom -->
      </div>
      </div>
      <!-- Main content -->
    </section>

@endsection