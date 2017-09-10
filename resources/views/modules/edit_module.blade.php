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
                    <form role="form" action="#" method="POST" id="frm-module-update">
                  {!! csrf_field() !!}
                    <div class="box-body">
                      <div class="row">
                          <div class="form-group">
                            <label for="first_name" class="col-sm-3 control-label">Module Title: </label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="module_title" id="module_title" placeholder="First Name" value="{{$module->module_title}}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="last_name" class="col-sm-3 control-label">Module Description: </label>
                            <div class="col-sm-9">
                            <textarea name="module_desc" id="module_desc" value="{{$module->module_desc}}" class="form-control" rows="4" cols="80"></textarea>
                            </div>
                          </div>
                        <input type="hidden" name="module_id" value="{{$module->id}}">
                      </div>
                    </div>
                    <input type="hidden" name="course_id" value="course_id">
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


$('#frm-module-update').on('submit',function(e){
  e.preventDefault();
  console.log('pressed');

  var data = $(this).serialize();
    console.log(data);
  $.post("{{route('updateModule')}}", data, function(response){

    console.log(response);
  });

});


</script>
@endsection
