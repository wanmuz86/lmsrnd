

@extends('layouts.master')


@section('style')


@endsection

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Edit Country
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
                      <form action="#" method="POST" id="frm-country-update">
                      {!! csrf_field() !!}
                        <div class="row">
                            <div class="form-group">
                              <label for="country_name" class="col-sm-3 control-label">Country Name: </label>
                              <div class="col-sm-9">
                              <input type="text" class="form-control" name="country_name" id="country_name" value="{{$country->country_name}}">
                              </div>
                            </div>
                            <input type="hidden" name="country_id" value="{{$country->id}}">
                        </div>
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


$('#frm-country-update').on('submit',function(e){
  e.preventDefault();
  console.log('pressed');

  var data = $(this).serialize();
    console.log(data);
  $.post("{{route('updateCountry')}}", data, function(response){

    console.log(response);
  });

});


</script>
@endsection
