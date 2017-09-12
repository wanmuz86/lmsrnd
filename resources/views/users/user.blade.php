@extends('layouts.master')


@section('style')


@endsection

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      User
      </h1>
    </section>

    <div class="modal modal-info fade" id="modal-info">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Add Country</h4>
          </div>
          <div class="modal-body">
                  <!-- Custom Tabs (Pulled to the right) -->
                  <form action="#" method="POST" id="frm-user-create">
                  {!! csrf_field() !!}
                  <div class="row">
                      <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Full Name: </label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" id="name" placeholder="FullName">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="username" class="col-sm-3 control-label">User Name: </label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">Password: </label>
                        <div class="col-sm-9">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
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
                        <label for="active" class="col-sm-3 control-label">Active: </label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="active" id="active" placeholder="Active">
                        </div>
                      </div>
                  </div>
                  </div>
          <div class="modal-footer">
           <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          </form>
        </div>

        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <section class="content">
      <div class="col-md-12">
        <!-- Custom Tabs (Pulled to the right) -->
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs ">
            <li class="active"><a href="#tab_1" data-toggle="tab">Active</a></li>
            <li class="pull-right">
              <button type="button" class=" btn btn-info btn-sm " data-toggle="modal" data-target="#modal-info">
                Add
              </button>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
              <div class="box">

                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped" id="newuser-table">
                          <tbody>
                          <tr class="info">
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a>Full Name</a></td>
                            <td class="mailbox-name"><a >Email</a></td>
                            <td class="mailbox-subject"><a>Roles</a></td>
                            <td class="mailbox-attachment"><a>Active</a></td>
                            <td class="mailbox-subject"><a>Operations</a></td>
                          </tr>
                          @foreach($users as $user)
                          <tr>
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a href=""><i class="fa fa-male"> {{$user->name}}</i></a></td>
                            <td class="mailbox-name"><a></i>{{$user->email}}</i></a></td>
                            <td class="mailbox-subject"><a >{{$user->group->group_name}}</a></td>
                            <td class="mailbox-attachment"><a>{{$user->active}}</a></td>
                            <td class="mailbox-subject"><div class="btn-group">
                              <a class="button btn btn-success btn-sm" href="{{route('editUser', ['id'=> $user->id])}}"><i class="fa fa-edit"></i> Edit</a>
                              {{ Form::open(array('url' => 'users/' . $user->id, 'class' => 'pull-right')) }}
                              {{ Form::hidden('_method', 'DELETE') }}
                              {{ Form::submit('Delete', array('class' => 'button btn btn-warning btn-sm')) }}
                              {{ Form::close() }}
                            </div></td>
                          </tr>
                          @endforeach

                          </tbody>
                        </table>
                        <!-- /.table -->
                      </div>
                      <!-- /.mail-box-messages -->
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div>
        <!-- nav-tabs-custom -->
      </div>
      <!-- Main content -->
    </section>


@endsection

@section('script')

<script>
$('#frm-user-create').on('submit',function(e){
  e.preventDefault();
  console.log('pressed');
  var data = $(this).serialize();
  console.log(data);
  $.post("{{route('createUser')}}", data, function(response){

    console.log(response)
     $("[data-dismiss=modal]").trigger({ type: "click" });
     $('#newuser-table').append('<td><input type="checkbox"></td><td><a href="#">'+response.first_name
                            +'</a></td>'
                            +'<td><a>'+response.updated_at+'</a></td>'
                            +'<td><div class="btn-group">'
                            +'<a class="button btn btn-default btn-sm" href="{{route("editUser", ["id"=> '+
                            +response.id+'])}}"><i class="fa fa-gear"></i> Edit</button>'+
                            "</div></td>'");

  });
});

</script>
@endsection
