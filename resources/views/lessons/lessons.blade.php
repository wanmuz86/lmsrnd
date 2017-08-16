@extends('layouts.mastercourse')


@section('style')


@endsection

@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="form-group">
        <h1>
        Lessons
        </h1>
        <p>Lessons and sections can be completed in any order. ID={{$course->id}}  Name={{$course->course_name}}</p>
      </div>

      <ol class="breadcrumb">
        <div class="form-group">
          <div class="btn-group">
            <button type="button" class="btn btn-default btn-sm " data-toggle="modal" data-target="#modal-info"><i class="fa  fa-plus"> Add</i></button>
            <button type="button" class="btn btn-default btn-sm"><i class="fa  fa-bar-chart"> Analytics</i></button>

          </div>
            <button type="button" class="btn btn-default btn-sm "><i class="fa  fa-list-ul"></i></button>
        </div>
        <div class="form-group">
          <div class="btn-group">
            <button type="button" class="btn btn-default btn-sm "><i><input type="checkbox"> Select all</i></button>
            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-thumb-tack"> Current</i></button>
            <button type="button" class="btn btn-default btn-sm "><i class="fa  fa-trash"> Delete</i></button>
          </div>

        </div>

      </ol>

    </section>

    <section class="content">

          <div class="form-group">
        <div class="modal modal-info fade" id="modal-info">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Lessons</h4>
              </div>
                <div class="modal-body">
                  <!-- Custom Tabs (Pulled to the right) -->

                  <form role="form" action="#" method="POST" id="frm-lesson-create">
                    {!! csrf_field() !!}
                    <div class="row">

                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Lesson name: </label>

                          <label class="col-sm-9">
                          <input type="text" class="form-control" name="lesson_name" id="lesson_name" placeholder="Title">
                          </label>
                        </div>
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Description: </label>

                          <label class="col-sm-9">
                          <textarea id="Lesson_desc" name="Lesson_desc" rows="4" cols="59"></textarea>
                        </label>
                      </div>
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Date: </label>

                          <label class="col-sm-9">
                          <input type="date" class="form-control" name="startdate" id="startdate" placeholder="Start Date">
                          </label>
                        </div>
                        <input type="hidden" name="course_id" value="{{$course->id}}">
                    </div>
              </div>
              <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              </form>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        <div class="box-body col-sm-3">
          {{ Html::image('img/photo2.png', 'Photo',  array('class' => 'img-responsive pad')) }}
          <p>I took this photo this morning. What do you guys think?</p>
          <button type="button" id="buttonmodule" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
          <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
          <span class="pull-right text-muted">127 likes - 3 comments</span>
        </div>
        <!-- /.box-body -->

        <!-- Main content -->
      </section>
      <!-- /.content -->

@endsection

@section('script')

<script>
$('#frm-lesson-create').on('submit',function(e){
  e.preventDefault();
  console.log('pressed');
  var data = $(this).serialize();
  $.post("{{route('createLesson',['id'=> $course->id])}}", data, function(response){

    console.log(response);
  });
});

$('#buttonmodule').on('click',function(e){

  console.log("testing");
});
</script>
@endsection
