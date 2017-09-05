@extends('layouts.mastercourse')


@section('style')


@endsection

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Edit Course
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
                    <form role="form" action="#" method="POST" id="frm-course-update">
                  {!! csrf_field() !!}
                    <div class="box-body">
                        <div class="form-group">
                          <label for="course_name" class="col-sm-3 control-label">Course Name</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="course_name" id="course_name" placeholder="Questions" value="{{$course->course_name}}"></input>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="category_id" class="col-sm-3 control-label">Category</label>
                          <div class="col-sm-9">
                          <select class="form-control" name="category_id" id="category_id" data-placeholder="Select " style="width: 100%;">
                          @foreach($categories as $cat)
                          @if ($cat->id === $course->category_id)
                             <option value="{{$cat->id}}" selected="selected">{{$cat->category_name}}</option>
                          @else
                          <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                          @endif
                            @endforeach
                          </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="course_desc" class="col-sm-3 control-label">Course Description</label>
                          <div class="col-sm-9">
                          <textarea  class="form-control" name="course_desc" id="course_desc">{{$course->course_desc}}</textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="is_active" class="col-sm-3 control-label">Activated </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="is_active" id="is_active" value="{{$course->is_active}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="activation_date" class="col-sm-3 control-label">Activation Date</label>
                          <div class="col-sm-9">
                          <input type="date" class="form-control" name="activation_date" id="activation_date" value="{{$course->activation_date}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="end_date" class="col-sm-3 control-label">Completion Date </label>
                          <div class="col-sm-9">
                           <input type="date" class="form-control" name="end_date" id="end_date" value="{{$course->end_date}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="trainer_id" class="col-sm-3 control-label">Trainer </label>
                          <div class="col-sm-9">
                           <input type="text" class="form-control" name="trainer_id" id="trainer_id" value="{{$course->trainer_id}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="course_logo" class="col-sm-3 control-label">Course Logo </label>
                          <div class="col-sm-9">
                         <img src="{{ env('APP_URL2') }}{{$image_url}}">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="price" class="col-sm-3 control-label">Price </label>
                          <div class="col-sm-9">
                           <input type="text" class="form-control" name="price" id="price" value="{{$course->price}}">
                          </div>
                        </div>
                    </div>
                    <input type="hidden" name="course_id" value="{{$course->id}}">
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

<script>


$('#frm-course-update').on('submit',function(e){
  e.preventDefault();
  console.log('pressed');

  var data = $(this).serialize();
    console.log(data);
  $.post("{{route('updateCourse')}}", data, function(response){

    console.log(response);
  });

});


</script>
@endsection
