

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
                      <form action="#" method="POST" id="frm-newuser-update">
                      {!! csrf_field() !!}
                        <div class="row">
                            <div class="form-group">
                              <label for="first_name" class="col-sm-3 control-label">First Name: </label>
                              <div class="col-sm-9">
                              <input type="text" class="form-control" name="first_name" id="first_name" value="{{$newUser->first_name}}">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="last_name" class="col-sm-3 control-label">Last Name: </label>
                              <div class="col-sm-9">
                              <input type="text" class="form-control" name="last_name" id="last_name" value="{{$newUser->last_name}}">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="email" class="col-sm-3 control-label">Email: </label>
                              <div class="col-sm-9">
                              <input type="text" class="form-control" name="email" id="email"value="{{$newUser->email}}">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="batch_id" class="col-sm-3 control-label">Group: </label>

                              <div class="col-sm-9">
                              <select class="form-control" name="group_id" id="group_id" data-placeholder="Select " style="width: 100%;">
                              @foreach($userGro as $gro)
                              @if ($gro->id === $newUser->group_id)
                                <option value="{{$gro->id}}" selected="selected">{{$gro->group_name}}</option>
                              @else
                                <option value="{{$gro->id}}">{{$gro->group_name}}</option>
                              @endif
                                @endforeach
                              </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="startdate" class="col-sm-3 control-label">Start Date: </label>

                              <div class="col-sm-9">
                              <input type="date" class="form-control" name="startdate" id="startdate" value="{{$newUser->startdate}}">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="batch_id" class="col-sm-3 control-label">Batch: </label>

                              <div class="col-sm-9">
                              <select class="form-control" name="batch_id" id="batch_id" data-placeholder="Select " style="width: 100%;">
                              @foreach($userBat as $bat)
                              @if ($bat->id === $newUser->batch_id)
                                <option value="{{$bat->id}}" selected="selected">{{$bat->batch_name}}</option>
                              @else
                                <option value="{{$bat->id}}">{{$bat->batch_name}}</option>
                              @endif
                              @endforeach
                              </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-3 control-label">Company: </label>

                              <div class="col-sm-9">
                              <select class="form-control" name="company_id" id="company_id"  data-placeholder="Select " style="width: 100%;">
                              @foreach($userCom as $com)
                              @if ($com->id === $newUser->company_id)
                                <option value="{{$com->id}}" selected="selected">{{$com->company_name}}</option>
                              @else
                                <option value="{{$com->id}}">{{$com->company_name}}</option>
                              @endif
                              @endforeach
                              </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="country_id"  class="col-sm-3 control-label">Country: </label>

                              <div class="col-sm-9">
                              <select class="form-control" name="country_id" id="country_id" data-placeholder="Select " style="width: 100%;">
                              @foreach($userCou as $cou)
                              @if ($cou->id === $newUser->country_id)
                                <option value="{{$cou->id}}" selected="selected">{{$cou->country_name}}</option>
                              @else
                                <option value="{{$cou->id}}">{{$cou->country_name}}</option>
                              @endif
                              @endforeach
                              </select>
                              </div>
                            </div>
                        </div>
                      </div>
                      <input type="hidden" name="newuser_id" value="{{$newUser->id}}">
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


$('#frm-newuser-update').on('submit',function(e){
  e.preventDefault();
  console.log('pressed');

  var data = $(this).serialize();
    console.log(data);
  $.post("{{route('updateNewUser')}}", data, function(response){

    console.log(response);
  });

});


</script>
@endsection
