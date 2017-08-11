@extends('layouts.mastercourse')


@section('style')


@endsection

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Add question(Multiple Choice)
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
                    <form role="form" action="#" method="POST" id="frm-newquestionmul-create">
                  {!! csrf_field() !!}
                    <div class="box-body">
                        <div class="form-group">
                          <label for="first_name" class="col-sm-3 control-label">Question</label>
                          <div class="col-sm-9">
                          <textarea type="text" class="form-control" name="question" id="question" placeholder="Questions"></textarea>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="last_name" class="col-sm-3 control-label">Answer 1: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="answer_1" id="answer_1" placeholder="Answer 1">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="email" class="col-sm-3 control-label">Answer 2: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="answer_2" id="answer_2" placeholder="Answer 2">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="email" class="col-sm-3 control-label">Answer 3: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="answer_3" id="answer_3" placeholder="Answer 3">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="email" class="col-sm-3 control-label">Answer 4: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="answer_4" id="answer_4" placeholder="Answer 4">
                          </div>
                        </div>
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

<script>


$('#frm-newquestionmul-create').on('submit',function(e){
  e.preventDefault();
  console.log('pressed');
  var data = $(this).serialize();
  $.post("{{route('createQuestionMultiple',['id'=> $course->id, '$quiz_id'=>$quiz->id])}}", data, function(response){

    console.log(response);
  });
});


</script>
@endsection
