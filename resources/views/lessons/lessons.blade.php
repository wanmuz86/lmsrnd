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


      </section>

      <section class="content">
      <div class="form-body">
        <ol class="breadcrumb ">
          <div class="form-group ">
            <div class="btn-group pull-right">
              <a class="btn btn-default btn-sm " href="{{route('add_lesson', ['module_id'=> $module->id, 'course_id'=>$course->id])}}"><i class="fa  fa-plus"> Add</i></a>
            </div>
          </div>
          <div class="table-responsive mailbox-messages">
          <table class="table table-hover table-striped">
          <tbody>
            <tr class="info ">
            <td><input type="checkbox"></td>
            <td class="mailbox-star"><a>Lesson Name</a></td>
            <td class="mailbox-name"><a >Lesson Description</a></td>

                            </tr>
                            @foreach($lessons as $lesson)
                            <tr>
                              <td><input type="checkbox"></td>
                              <td class="mailbox-star"><a href="{{route('getLesson',['course_id'=> $course->id, 'module_id'=>$module->id])}}"><i class="fa fa-book"></i> {{$lesson->lesson_name}}</a></td>
                              <td class="mailbox-name"><a><i> {{$lesson->lesson_desc}}</i></a></td>

                            </tr>

                            @endforeach
                            </tbody>
                          </table>
                          <!-- /.table -->
                        </div>
                        <!-- /.mail-box-messages -->
        </ol>

      </div>

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
    console.log("heare")
    $.post("{{route('createLesson',['id'=> $course->id])}}", data, function(response){

      console.log(response);
    });
  });

  $('#buttonmodule').on('click',function(e){

    console.log("testing");
  });
  </script>
  @endsection
