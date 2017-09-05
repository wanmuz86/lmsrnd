
@extends('layouts.master')


@section('style')


@endsection

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Edit NewUser
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
                      <form action="#" method="POST" id="frm-batch-update">
                      {!! csrf_field() !!}
                        <div class="row">
                            <div class="form-group">
                              <label for="first_name" class="col-sm-3 control-label">Batch Name: </label>
                              <div class="col-sm-9">
                              <input type="text" class="form-control" name="batch_name" id="batch_name" value="{{$batch->batch_name}}">
                              </div>
                            </div>
                        </div>
                        <input type="hidden" name="batch_id" value="{{$batch->id}}">
                      </div>
                      <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
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


$('#frm-batch-update').on('submit',function(e){
  e.preventDefault();
  console.log('pressed');

  var data = $(this).serialize();
    console.log(data);
  $.post("{{route('updateBatch')}}", data, function(response){

    console.log(response);
  });

});


</script>
@endsection
