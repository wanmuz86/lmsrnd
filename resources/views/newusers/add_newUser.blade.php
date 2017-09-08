@extends('layouts.master')


@section('style')


@endsection

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Edit Category
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
                    <form role="form" action="#" method="POST" id="frm-newuser-create">
                  {!! csrf_field() !!}
                  <div class="row">
                      <div class="form-group">
                        <label for="first_name" class="col-sm-3 control-label">First Name: </label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="last_name" class="col-sm-3 control-label">Last Name: </label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Email: </label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="batch_id" class="col-sm-3 control-label">Group: </label>

                        <div class="col-sm-9">
                        <select class="form-control" name="group_id" id="group_id" data-placeholder="Select " style="width: 100%;">
                        @foreach($userGro as $gro)
                           <option value="{{$gro->id}}">{{$gro->group_name}}</option>
                          @endforeach
                        </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="startdate" class="col-sm-3 control-label">Start Date: </label>

                        <div class="col-sm-9">
                        <input type="date" class="form-control" name="startdate" id="startdate" placeholder="Start Date">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="batch_id" class="col-sm-3 control-label">Batch: </label>

                        <div class="col-sm-9">
                        <select class="form-control" name="batch_id" id="batch_id" data-placeholder="Select " style="width: 100%;">
                        @foreach($userBat as $bat)
                           <option value="{{$bat->id}}">{{$bat->batch_name}}</option>
                        @endforeach
                        </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Company: </label>

                        <div class="col-sm-9">
                        <select class="form-control" name="company_id" id="company_id"  data-placeholder="Select " style="width: 100%;">
                        @foreach($userCom as $com)
                           <option value="{{$com->id}}">{{$com->company_name}}</option>
                        @endforeach
                        </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="country_id"  class="col-sm-3 control-label">Country: </label>

                        <div class="col-sm-9">
                        <select class="form-control" name="country_id" id="country_id" data-placeholder="Select " style="width: 100%;">
                        @foreach($userCou as $cou)
                           <option value="{{$cou->id}}">{{$cou->country_name}}</option>
                          @endforeach
                        </select>
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
$('#frm-newuser-create').on('submit',function(e){
  e.preventDefault();
  console.log('pressed');
  var data = $(this).serialize();
  console.log(data);
  $.post("{{route('createNewUser')}}", data, function(response){

    console.log(response);
  });
});

</script>

@endsection
