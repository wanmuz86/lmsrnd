@extends('layouts.master')


@section('style')


@endsection

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Edit Company
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
                    <form role="form" action="#" method="POST" id="frm-company-update">
                      {!! csrf_field() !!}
                      <div class="row">
                          <div class="form-group">
                            <label for="category_name" class="col-sm-3 control-label">Company Name: </label>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" name="company_name" id="company_name"  value="{{$company->company_name}}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="company_email" class="col-sm-3 control-label">Email: </label>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" name="company_email"  value="{{$company->company_email}}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="company_address" class="col-sm-3 control-label">Address: </label>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" name="company_address"   value="{{$company->company_address}}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="company_no" class="col-sm-3 control-label">Fon No. : </label>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" name="company_no"  value="{{$company->company_no}}">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="company_logo" class="col-sm-3 control-label">Company Logo </label>
                            <div class="col-sm-9">
                           <img src="{{ env('APP_URL2') }}{{$image_url}}">
                            </div>
                            <img src="{{$image_url}}">
                          </div>
                      </div>
                    <input type="hidden" name="company_id" value="{{$company->id}}">
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


$('#frm-company-update').on('submit',function(e){
  e.preventDefault();
  console.log('pressed');

  var data = $(this).serialize();
    console.log(data);
  $.post("{{route('updateCompany')}}", data, function(response){

    console.log(response);
  });

});


</script>
@endsection
