@extends('layouts.mastercourse')


@section('style')


@endsection

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Module Management <small>  Course: {{$course->course_name}}</small>
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
            <h4 class="modal-title">Add Module</h4>
          </div>
          <div class="modal-body">
                  <!-- Custom Tabs (Pulled to the right) -->
                  <form action="#" method="POST" id="frm-module-create">
                  {!! csrf_field() !!}
                    <div class="row">
                        <div class="form-group">
                          <label for="first_name" class="col-sm-3 control-label">Module Title: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="module_title" id="module_title" placeholder="First Name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="last_name" class="col-sm-3 control-label">Module Description: </label>
                          <div class="col-sm-9">
                          <textarea name="module_desc" id="module_desc" class="form-control" rows="4" cols="80"></textarea>
                          </div>
                        </div>
                      <input type="hidden" name="course_id" value="{{$course->id}}">
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
                      <div class="mailbox-controls">


                        <!-- /.pull-right -->
                      </div>
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
                          <tr class="info ">
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a>Module Name</a></td>
                            <td class="mailbox-name"><a >Module Description</a></td>
                            <td class="mailbox-subject"><a>Last updated On</a></td>
                            <td class="mailbox-subject"><a>Operations</a></td>
                          </tr>
                          @foreach($modules as $module)
                          <tr>
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a href="{{route('getLesson',['course_id'=> $course->id, 'module_id'=>$module->id])}}"><i class="fa fa-book"></i> {{$module->module_title}}</a></td>
                            <td class="mailbox-name"><a><i> {{$module->module_desc}}</i></a></td>
                            <td class="mailbox-subject"><a>{{$module->updated_at}}</a></td>
                            <td class="mailbox-subject"><div class="btn-group">
                              <a class="button btn btn-success btn-sm" href="{{route('editModule', ['course_id'=> $course->id,'module_id'=> $module->id])}}"><i class="fa fa-edit"></i> Edit</a>
                            {{ Form::open(array('url' => 'modules/' . $module->id, 'class' => 'pull-right')) }}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Delete', array('class' => 'button btn btn-warning btn-sm')) }}
                            {{ Form::close() }}
                          </td>
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
$('#frm-module-create').on('submit',function(e){
  e.preventDefault();
  console.log('pressed');
  var data = $(this).serialize();
  $.post("{{route('createModule',['id'=> $course->id])}}", data, function(response){

    console.log(response);
    $("[data-dismiss=modal]").trigger({ type: "click" });
    $('#cat-table').append('<td><input type="checkbox"></td><td><a href="#">'+JSON.parse(response).course_name
                           +'</a></td>'
                           +'<td><a>'+JSON.parse(response).updated_at+'</a></td>'
                           +'<td><div class="btn-group">'
                           +'<a class="button btn btn-default btn-sm" href="{{route("editModule", ["id"=> '+
                           +JSON.parse(response).id+'])}}"><i class="fa fa-gear"></i> Edit</button>'+
                           "</div></td>'");

  });
});


$('#buttonmodule').on('click',function(e){

  console.log("testing");

  });

</script>
@endsection
