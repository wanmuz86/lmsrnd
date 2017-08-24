@extends('layouts.mastercourse')


@section('style')


@endsection

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Add lesson
      </h1>
    </section>
    <section class="content">
      <div class="col-md-12">
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs ">
            <li class="active"><a href="#tab_1" data-toggle="tab">Details</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
              <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                    <form role="form" action="#" method="POST" id="frm-lesson-create">
                  {!! csrf_field() !!}
                    <div class="box-body">
                        <div class="form-group">
                          <label for="first_name" class="col-sm-2 control-label">Lesson Title</label>
                          <div class="col-sm-10">
                          <input type="text" class="form-control" name="lesson_name" id="lesson_name" placeholder="Lesson Title"></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="first_name" class="col-sm-2 control-label">Lesson Content</label>
                          <div class="col-sm-10">
                          <textarea type="text" class="form-control" name="lesson_desc" id="lesson_desc" placeholder="Lesson Content"></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label">Date: </label>

                          <label class="col-sm-10">
                          <input type="date" class="form-control" name="startdate" id="startdate" placeholder="Start Date">
                          </label>
                        </div>
                        <input type="hidden" name="course_id" value="{{$course->id}}">
                        <input type="hidden" name="module_id" value="{{$module->id}}">
                    </div>
                    <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>

                  </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>

          </div>
          <!-- /.tab-content -->

      <!-- Main content -->
    </section>


@endsection

@section('script')
<script src="https://cdn.ckeditor.com/4.7.2/standard/ckeditor.js"></script>
<script>

CKEDITOR.replace( 'lesson_desc' );
$('#frm-lesson-create').on('submit',function(e){
  e.preventDefault();
  console.log('pressed');
  for(var i in CKEDITOR.instances) CKEDITOR.instances[i].updateElement();
  var data = $(this).serialize();
  
 $.post("{{route('createLesson',['id'=> $course->id])}}", data, function(response){

    console.log(response);
  });
  });



</script>
@endsection

