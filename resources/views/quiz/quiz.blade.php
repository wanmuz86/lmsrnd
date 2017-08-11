@extends('layouts.mastercourse')


@section('style')


@endsection

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Quiz Management <small>  Model ID={{$course->id}}  Name={{$course->course_name}}</small>
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
            <h4 class="modal-title">Add New Quiz</h4>
          </div>
          
                  <!-- Custom Tabs (Pulled to the right) -->
                  <form action="#" method="POST" id="frm-newquiz-create">
                  <div class="modal-body">
                  {!! csrf_field() !!}
                    <div class="row">
                        <div class="form-group">
                          <label for="quiz_name" class="col-sm-3 control-label">Quiz Name </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="quiz_name" id="quiz_name" placeholder="Quiz Name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="quiz_instruction" class="col-sm-3 control-label">Quiz Instruction </label>
                          <div class="col-sm-9">
                          <textarea class="form-control" name="quiz_instruction" id="quiz_instruction" placeholder="Quiz Instruction"></textarea>
                          <input type="hidden" name="course_id" value="{{$course->id}}">
                          </div>
                        </div>
                    </div>
                    </div>
                
          <div class="modal-footer">
           <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          </form>
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
            <li class="active"><a href="#tab_1" data-toggle="tab">Active</a></li>
            
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
              <div class="box">

                    <!-- /.box-header -->
                    <div class="box-body no-padding">

                      <div class="modal modal-info fade" id="edit">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Add Page</h4>
                            </div>
                            <div class="modal-body">
                                    <!-- Custom Tabs (Pulled to the right) -->
                                    <form action="#" method="POST" id="frm-newuser-create">
                                    {!! csrf_field() !!}
                                      <div class="row">
                                          <div class="form-group">
                                            <label for="first_name" class="col-sm-3 control-label">Page Title: </label>
                                            <div class="col-sm-9">
                                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                              <label lass="col-sm-12 control-label">Page Body</label>
                                          <div class="box-body pad">
                                            <form>
                                                <textarea id="editor1" name="editor1" rows="10" cols="80">
                                                </textarea>
                                            </form>
                                          </div>

                                            <!-- /.box -->
                                          </div>
                                          <div class="form-group">
                                            <label for="email" class="col-sm-3 control-label">Published: </label>
                                            <div class="col-sm-9">
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label for="batch_id" class="col-sm-3 control-label">Meta Tags: </label>

                                            <div class="col-sm-9">
                                            <select class="form-control" name="group_id" id="group_id" data-placeholder="Select " style="width: 100%;">

                                            </select>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label for="startdate" class="col-sm-3 control-label">Meta Description: </label>

                                            <div class="col-sm-9">
                                            <input type="text" class="form-control" name="startdate" id="startdate" placeholder="Start Date">
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                            <div class="modal-footer">
                              <button type="close" class="btn btn-danger">Close</button>
                             <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </form>
                          </div>

                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                      <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped">
                          <tbody>
                          <tr class="info">
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a>Quiz Name</a></td>
                            <td class="mailbox-subject"><a>No of questions</a></td>
                            <td class="mailbox-subject"><a>Average marks</a></td>
        
                          </tr>
                          
                          @foreach($quizes as $quiz)
                          <tr>
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a href="{{route('getQuizDetail',['course_id'=> $course->id, 'quiz_id'=>$quiz->id])}}">{{$quiz->quiz_name}}</i></a></td>

                            <td class="mailbox-subject"><a >10</a></td>
                             <td class="mailbox-subject"><a >68%</a></td>
                          </tr>
                          @endforeach

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


<script>
$('#frm-newquiz-create').on('submit',function(e){
  e.preventDefault();
  console.log('pressed');
  var data = $(this).serialize();
  $.post("{{route('createQuiz',['id'=> $course->id])}}", data, function(response){

    console.log(response);
  });
});

</script>
@endsection
