@extends('layouts.master')


@section('style')


@endsection

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Course
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
            <h4 class="modal-title">Add Course</h4>
          </div>
          <div class="modal-body">
                  <!-- Custom Tabs (Pulled to the right) -->
                  <form action="#" method="POST" id="frm-course-create" enctype ="multipart/form-data">
                  {!! csrf_field() !!}
                    <div class="row">
                        <div class="form-group">
                          <label for="batch_id" class="col-sm-3 control-label">Category: </label>

                          <div class="col-sm-9">
                          <select class="form-control" name="category_id" id="  " data-placeholder="Select " style="width: 100%;">
                          @foreach($courseCat as $cat)
                             <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                            @endforeach
                          </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="category_name" class="col-sm-3 control-label">Course Name</label>
                          <div class="col-sm-12">
                          <input type="text" class="form-control" name="course_name" id="course_name" >
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="category_name" class="col-sm-3 control-label">Course Desc: </label>
                          <div class="col-sm-12">
                          <textarea type="text" class="form-control" name="course_desc" id="course_desc" placeholder="First Name"></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-12">
                         <input type="text" name="is_active" id="is_active">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="category_name" class="col-sm-3 control-label">Activation Date </label>
                          <div class="col-sm-12">
                          <input type="date" class="form-control" name="activation_date" id="activation_date" >
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="category_name" class="col-sm-3 control-label">End Date </label>
                          <div class="col-sm-12">
                          <input type="date" class="form-control" name="end_date" id="end_date" >
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="category_name" class="col-sm-3 control-label"> Trainer</label>
                          <div class="col-sm-12">
                          <input type="text" class="form-control" name="trainer_id" id="trainer_id" >
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="category_name" class="col-sm-3 control-label">Course Logo</label>
                          <div class="col-sm-12">
                          <input name="course_logo" class="form-control" type="file" id="course_logo" >
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="category_name" class="col-sm-3 control-label">Price </label>
                          <div class="col-sm-12">
                          <input type="text" class="form-control" name="price" id="price" >
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


                      <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped">
                          <tbody>
                          <tr class="info">
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a href="#">Course Name</a></td>
                            <td class="mailbox-subject"><a>Category</a></td>
                            <td class="mailbox-subject"><a>Last updated On</a></td>
                            <td class="mailbox-subject"><a>Operations</a></td>
                          </tr>

                          @foreach($courses as $course)
                          <tr class="info">
                            <td><input type="checkbox"></td>

                            <td class="mailbox-star"><a href="{{route('getModules', ['id'=> $course->id])}}">{{$course->course_name}}</a></td>
                            <td class="mailbox-subject"><a>{{$course->category->category_name}}</a></td>
                            <td class="mailbox-subject"><a>{{$course->updated_at}}</a></td>
                            <td class="mailbox-subject"><div class="btn-group">
                              <a class="button btn btn-success btn-sm" href="{{route('editCourse', ['id'=> $course->id])}}"><i class="fa fa-edit"></i> Edit</a>
                            {{ Form::open(array('url' => 'courses/' . $course->id, 'class' => 'pull-right')) }}
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
$('#frm-course-create').on('submit',function(e){
  e.preventDefault();
  console.log('pressed');
  var data = $(this).serialize();
  console.log(data);
  $.post("{{route('createCourse')}}", data, function(response){
    console.log(response);
     $("[data-dismiss=modal]").trigger({ type: "click" });
     $('#cat-table').append('<td><input type="checkbox"></td><td><a href="#">'+response.course_name
                            +'</a></td>'
                            +'<td><a>'+response.updated_at+'</a></td>'
                            +'<td><div class="btn-group">'
                            +'<a class="button btn btn-default btn-sm" href="{{route("editCourse", ["id"=> '+
                            +response.id+'])}}"><i class="fa fa-gear"></i> Edit</button>'+
                            "</div></td>'");

  });
});

</script>
@endsection
