@extends('layouts.mastercourse')

@section('style')

@endsection

@section('content')

 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Games <small> ID={{$course->id}}  Name={{$course->course_name}}</small>
      </h1>
      <ol class="breadcrumb">
        <button type="button" class="btn btn-info btn-sm " data-toggle="modal" data-target="#modal-info">
          Add
        </button>
        <li></li>
      </ol>
    </section>

    <div class="modal modal-info fade" id="modal-info">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Add more Games</h4>
          </div>
          <div class="modal-body">
            <div>
            <label for="exampleInputPassword1">Name:</label>
            <input type="text" class="form-control" id="" placeholder="">
            </div>
          </div>
          <div class="modal-footer">
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <section class="content">
      <div class="col-md-12">
        <!-- Custom Tabs (Pulled to the right) -->
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs ">
            <li class="active"><a href="#tab_1" data-toggle="tab">Delete</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
              <div class="box">


                    <!-- /.box-header -->
                    <div class="box-body no-padding">

                      <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped">
                          <tbody>
                          <tr class="info">
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a href="#"> Game</a></td>
                            <td class="mailbox-name"><a href="#"><i class="fa fa-bar-chart-o"> Level</a></td>
                            <td class="mailbox-subject"><a href="#"><i class="fa fa-shield"> Badges</a></td>
                            <td class="mailbox-attachment"><a href="#"><i class="fa fa-star"> Points</a></td>
                            <td class="mailbox-date"><a href="#"><i class="fa fa-male"> Players</a></td>
                            <td class="mailbox-subject"><a>Operations</a></td>
                          </tr>
                          <tr>
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a href="#">Code Hunt</i></a></td>
                            <td class="mailbox-name"><a href="#">0</td>
                            <td class="mailbox-subject"><a href="#">0</td>
                            <td class="mailbox-attachment"><a href="#">0</a></td>
                            <td class="mailbox-date"><a href="#">0</td>
                          
                          </tr>
                          <tr>
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a href="#">ExploreCode</i></a></td>
                            <td class="mailbox-name"><a href="#">0</td>
                            <td class="mailbox-subject"><a href="#">0</td>
                            <td class="mailbox-attachment"><a href="#">0</a></td>
                            <td class="mailbox-date"><a href="#">0</td>
                          </tr>
                          </tbody>
                        </table>
                        <!-- /.table -->
                      </div>
                      <!-- /.mail-box-messages -->
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_2">
              <div class="box">

                    <div class="box-header">
                      <h3 class="box-title">Inbox</h3>

                      <div class="box-tools pull-right">
                        <div class="has-feedback">
                          <input type="text" class="form-control input-sm" placeholder="Search Mail">
                          <span class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>
                      </div>
                      <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      <div class="mailbox-controls">
                        <!-- Check all button -->
                        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                        </button>
                        <div class="btn-group">
                          <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                          <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                          <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                        </div>
                        <!-- /.btn-group -->
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>

                        <!-- /.pull-right -->
                      </div>
                      <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped">
                          <tbody>
                          <tr class="info">
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a href="#">Assignment</a></td>
                            <td class="mailbox-name"><a href="#">Due</a></td>
                            <td class="mailbox-attachment"><a href="#">Max Score</a></td>
                            <td class="mailbox-date"><a href="#">To Grade/ Submitted</a></td>
                          </tr>
                          <tr>
                            <td><input type="checkbox"></td>
                            <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                            <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                            </td>

                          </tr>
                          <tr>
                            <td><input type="checkbox"></td>
                            <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                            <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                            </td>
                          </tr>
                          <tr>
                            <td><input type="checkbox"></td>
                            <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                            <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                            </td>
                          </tr>

                          </tbody>
                        </table>
                        <!-- /.table -->
                      </div>
                      <!-- /.mail-box-messages -->
                    </div>
                    <!-- /.box-body -->
                </div>

            </div>
            <div class="tab-pane" id="tab_3">
                <h1 class="text-blue"> Assignment results</h1>
                <h3>There are no submissions yet.</h3>
            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div>
        <!-- nav-tabs-custom -->
      </div>
      <!-- Main content -->
    </section>

    @endsection

@section('script')

@endsection
