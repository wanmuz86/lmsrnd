@extends('layouts.master')

@section('style')

@endsection

@section('content')

 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Assignment
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
            <h4 class="modal-title">Add Assignment</h4>
          </div>
          <div class="modal-body modal-lg">
            <div class="modal-body">
              <!-- Custom Tabs (Pulled to the right) -->
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs ">
                  <li class="active"><a href="#1" data-toggle="tab">Overview</a></li>
                  <li><a href="#2" data-toggle="tab">Options</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="1">
                    <form role="form">
                      <div class="box-body">
                        <div class="form-group text-black">
                          <label for="exampleInputEmail1">Title</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group text-black">
                          <div class="col-sm-3">
                            <label for="exampleInputPassword1">Max score</label>
                              <p><label for="exampleInputPassword1">N/A</label></p>
                          </div>
                          <div class="col-sm-3">
                            <div>
                            <label for="exampleInputPassword1">Category</label>
                            <select name="samplecondition" class="form-control select-sm" >
          										 <option value=""></option>
          										 <option value=""></option>
          										 <option value=""></option>

          									</select>
                          </div>
                          <div>
                            <label for="exampleInputPassword1">Grading</label>
                            <select name="samplecondition" class="form-control select-sm" >
          										 <option value=""></option>
          										 <option value=""></option>
          										 <option value=""></option>

          									</select>
                          </div>
                          </div>
                          <div class="col-sm-3">
                            <div>
                            <label for="exampleInputPassword1">Start</label>
                            <input type="date" class="form-control" id="" placeholder="">
                            </div>
                            <div>
                            <label for="exampleInputPassword1">Due</label>
                            <input type="date" class="form-control" id="" placeholder="">
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div>
                            <label for="exampleInputPassword1">Lesson</label>
                            <select name="samplecondition" class="form-control select-sm" >
          										 <option value=""></option>
          										 <option value=""></option>
          										 <option value=""></option>

          									</select>
                          </div>
                          <div>
                            <label for="exampleInputPassword1">Gateway?</label>
                            <p><input type="checkbox"></p>
                          </div>
                          </div>
                        </div>
                        <div class="form-group text-black col-sm-12">
                          <label >Instructions:</label>
                          <div class="box-body pad">

                                  <textarea id="editor1" name="editor1" rows="10" cols="80">
                                                          This is my textarea to be replaced with CKEditor.
                                  </textarea>
                            </form>
                          </div>
                        </div>

                      </div>
                      <!-- /.box-body -->


                    </form>

                  </div>
                  <div class="tab-pane active" id="2">
                    <form>


                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
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
            <li class="active"><a href="#tab_1" data-toggle="tab">All</a></li>
            <li><a href="#tab_2" data-toggle="tab">Not Given</a></li>
            <li><a href="#tab_3" data-toggle="tab">Analytics</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
              <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      <div class="mailbox-controls">
                        <!-- Check all button -->
                        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                        </button>
                        <div class="btn-group">
                          <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"> Delete</i></button>
                          <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"> Give</i></button>
                          <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"> Ungive</i></button>
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-edit"> Edit</i></button>
                        </div>
                        <!-- /.pull-right -->
                      </div>
                      <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped">
                          <tbody>
                          <tr class="info">
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a href="#">Assignment</a></td>
                            <td class="mailbox-name"><a href="#">Due</a></td>
                            <td class="mailbox-subject"><a>Given</a></td>
                            <td class="mailbox-attachment"><a href="#">Max Score</a></td>
                            <td class="mailbox-date"><a href="#">% of overall</a></td>
                            <td class="mailbox-date"><a href="#">To Grade/ Submitted</a></td>
                          </tr>
                          <tr>
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow">Oppinion</i></a></td>
                            <td class="mailbox-name"><b>Dec 3 </b> / 12:am</td>
                            <td class="mailbox-subject"><i class="fa  fa-close  text-red"></i></td>
                            <td class="mailbox-attachment"><a>100</a></td>
                            <td class="mailbox-date">100</td>
                          </tr>
                          <tr>
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow">Oppinion</i></a></td>
                            <td class="mailbox-name"><b>Dec 3 </b> / 12:am</td>
                            <td class="mailbox-subject"><i class="fa  fa-close  text-red"></i></td>
                            <td class="mailbox-attachment"><a>100</a></td>
                            <td class="mailbox-date">100</td>
                          </tr>
                          <tr>
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow">Oppinion</i></a></td>
                            <td class="mailbox-name"><b>Dec 3 </b> / 12:am</td>
                            <td class="mailbox-subject"><i class="fa  fa-close  text-red"></i></td>
                            <td class="mailbox-attachment"><a>100</a></td>
                            <td class="mailbox-date">100</td>
                          </tr>
                          <tr>
                            <td></td>
                            <td class="mailbox-star"></td>
                            <td class="mailbox-name"></td>
                            <td class="mailbox-subject"></td>
                            <td class="mailbox-attachment"><a>Total</a></td>
                            <td class="mailbox-date">300</td>
                            <td class="mailbox-date"></td>
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
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      <div class="mailbox-controls">
                        <!-- Check all button -->
                        <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                        </button>
                        <div class="btn-group">
                          <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"> Delete</i></button>
                          <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"> Give</i></button>
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-edit"> Edit</i></button>
                        </div>
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
                            <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow">Oppinion</i></a></td>
                            <td class="mailbox-name"><b>Dec 3 </b> / 12:am</td>
                            <td class="mailbox-date">100</td>

                          </tr>
                          <tr>
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow">Oppinion</i></a></td>
                            <td class="mailbox-name"><b>Dec 3 </b> / 12:am</td>
                            <td class="mailbox-date">100</td>
                          </tr>
                          <tr>
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow">Oppinion</i></a></td>
                            <td class="mailbox-name"><b>Dec 3 </b> / 12:am</td>
                            <td class="mailbox-date">100</td>
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
