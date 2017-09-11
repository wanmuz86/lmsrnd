@extends('layouts.master')


@section('style')


@endsection

@section('content')

<!-- Content Wrapper. Contains page content -->

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      User Profile
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="box box-primary">
          <div class="box-body box-profile">
            {{ Html::image('img/user2-160x160.jpg', 'User Image',  array('class' => 'img-circle img-responsive profile-user-img')) }}


            <h3 class="profile-username text-center"></h3>

            <p class="text-muted text-center"></p>

            <ul class="list-group list-group-unbordered">
              <li class="list-group-item">
                <b>Name :</b> <a class="pull-right">Alexander Pierce</a>
              </li>
              <li class="list-group-item">
                <b>Level :</b> <a class="pull-right">1</a>
              </li>
              <li class="list-group-item">
                <b>XP :</b> <a class="pull-right">15</a>
              </li>
            </ul>
            <a href="#" class="btn btn-default btn-block"><b>Logout</b></a>
            <a href="#" class="btn btn-success btn-block"><b>Edit Profile</b></a>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->

      <div class="col-md-9">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
            <li ><a href="#enrolled" data-toggle="tab">Enrolled</a></li>
          </ul>
          <div class="tab-content">
            <div class="active tab-pane" id="activity">
              <div class="box">
                    <!-- /.box-header -->
                    <div class="box-header">
                      <h3>My Courses</h3>
                    </div>
                    <div class="box-body no-padding text-center">
                      <p>
                        <p> No Courses Saved <br>
                          Start learning now
                        </p>
                        <button class="btn btn-success" type="button" name="button">MANAGE COURSES</button>
                      </p>
                    </div>
                    <!-- /.box-body -->
                </div>
                <div class="box">
                      <!-- /.box-header -->
                      <div class="box-header">
                        <h3>My Codes</h3>
                      </div>
                      <div class="box-body no-padding text-center">
                        <p>
                        <p> No Codes Saved <br>
                          Start building your own code portfolio
                        </p>
                        <button class="btn btn-success" type="button" name="button">CODE NEW</button>
                        </p>
                      </div>
                      <!-- /.box-body -->
                  </div>
                  <div class="box">
                        <!-- /.box-header -->
                        <div class="box-header">
                          <h3>My Certificates</h3>
                        </div>
                        <div class="box-body no-padding text-center">
                          <p >You don't have any certificates. Complete courses to earn certificates.</p>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <div class="box">
                          <!-- /.box-header -->
                          <div class="box-header">
                            <h3>Achievements</h3>
                          </div>
                          <div class="box-body no-padding">
                            <div class="col-sm-6">
                              <div class="col-md-12 col-sm-6 col-xs-12">
                                <div class="info-box">
                                  <span class="info-box-icon bg-yellow"><i class="fa fa-check"></i></span>

                                  <div class="info-box-content">
                                    <h4 class="info-box-title">Verified Account</h4>
                                    <span class="info-box-text">Verify your account's email address</span>
                                  </div>
                                  <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                              </div>
                              <div class="col-md-12 col-sm-6 col-xs-12">
                                <div class="info-box">
                                  <span class="info-box-icon bg-yellow"><i class="fa fa-check"></i></span>

                                  <div class="info-box-content">
                                    <h4 class="info-box-title">Gold Moderator</h4>
                                    <span class="info-box-text">Exclusive badge, handed out to Top Users who moderate community content for 6 months in a row.</span>
                                  </div>
                                  <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                              </div>
                              <div class="col-md-12 col-sm-6 col-xs-12">
                                <div class="info-box">
                                  <span class="info-box-icon bg-yellow"><i class="fa  fa-thumbs-up"></i></span>

                                  <div class="info-box-content">
                                    <h4 class="info-box-title">Quiz Reviewer</h4>
                                    <span class="info-box-text">Exclusive monthly badge, handed out to Top Users who moderate user-generated quizzes.</span>
                                  </div>
                                  <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="col-md-12 col-sm-6 col-xs-12">
                                <div class="info-box">
                                  <span class="info-box-icon bg-yellow"><i class="fa fa-star"></i></span>

                                  <div class="info-box-content">
                                    <h4 class="info-box-title">Moderator</h4>
                                    <p class="info-box-text">Exclusive monthly badge, handed out to Top Users who moderate community content.</p>
                                  </div>
                                  <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                              </div>
                              <div class="col-md-12 col-sm-6 col-xs-12">
                                <div class="info-box">
                                  <span class="info-box-icon bg-yellow"><i class="fa fa-users"></i></span>

                                  <div class="info-box-content">
                                    <h4 class="info-box-title">Networker</h4>
                                    <p class="info-box-text">Participate in a SoloLearn meetup.</p>
                                  </div>
                                  <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                              </div>
                              <div class="col-md-12 col-sm-6 col-xs-12">
                                <div class="info-box">
                                  <span class="info-box-icon bg-yellow"><i class="fa fa-star"></i></span>

                                  <div class="info-box-content">
                                    <h4 class="info-box-title">Gold Quiz Reviewer</h4>
                                    <p class="info-box-text">Exclusive badge, handed out to Top Users who moderate user-generated quizzes for 6 months in a row.</p>
                                  </div>
                                  <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                              </div>
                            </div>
                          </div>
                          <!-- /.box-body -->
                      </div>
            </div>
            <!-- /.tab-pane -->
            <!-- /.tab-pane -->

             <div class=" tab-pane" id="enrolled">
              <form class="form-horizontal">
                <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped">
                          <tbody>
                          <tr class="info">
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a href="#">Course</a></td>
                            <td class="mailbox-date"><a href="#">Enrolled Date</a></td>
                            <td class="mailbox-date"><a href="#">Completion Date</a></td>
                            <td class="mailbox-date"><a href="#">Operation</a></td>
                          </tr>

                          <tr>
                            <td><input type="checkbox"></td>

                            <td class="mailbox-star"><a href=""><i class="fa fa-male"></i></a></td>

                            <td class="mailbox-name"></i></a></td>
                            <td class="mailbox-date"></td>
                            <td class="mailbox-date"> <a class="button btn btn-default btn-sm" href="#"><i class="fa fa-gear"></i>Enrolled</button></td>

                          </tr>


                          </tbody>
                        </table>
                        <!-- /.table -->
                      </div>
                      <!-- /.mail-box-messages -->
              </form>
            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->

          </div>
          <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

  </section>

  <!-- /.content -->


@endsection
