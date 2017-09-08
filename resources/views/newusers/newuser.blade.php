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

    <section class="content">
      <div class="col-md-12">
        <!-- Custom Tabs (Pulled to the right) -->
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs ">
            <li class="active"><a href="#tab_1" data-toggle="tab">Active</a></li>
            <li class="pull-right">
              <button type="button" class=" btn btn-info btn-sm ">
                  <a href="{{route('addNewUser')}}">Add</a>
              </button>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
              <div class="box">

                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      <div class="modal modal-info fade" id="edit">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Add Page</h4>
                            </div>
                            <div class="modal-body">
                                    <!-- Custom Tabs (Pulled to the right) -->
                                    <form action="#" method="POST" id="frm-newuser-create">
                                    {!! csrf_field() !!}
                                      <div class="row">
                                          <div class="form-group">
                                            <label for="first_name" class="col-sm-3 control-label">Page Title: </label>
                                            <div class="col-sm-9">
                                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                              <label lass="col-sm-12 control-label">Page Body</label>
                                          <div class="box-body pad">
                                            <form>
                                                <textarea id="editor1" name="editor1" rows="10" cols="80">
                                                </textarea>
                                            </form>
                                          </div>

                                            <!-- /.box -->
                                          </div>
                                          <div class="form-group">
                                            <label for="email" class="col-sm-3 control-label">Published: </label>
                                            <div class="col-sm-9">
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label for="batch_id" class="col-sm-3 control-label">Meta Tags: </label>

                                            <div class="col-sm-9">
                                            <select class="form-control" name="group_id" id="group_id" data-placeholder="Select " style="width: 100%;">

                                            </select>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label for="startdate" class="col-sm-3 control-label">Meta Description: </label>

                                            <div class="col-sm-9">
                                            <input type="text" class="form-control" name="startdate" id="startdate" placeholder="Start Date">
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                            <div class="modal-footer">
                              <button type="close" class="btn btn-danger">Close</button>
                             <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </form>
                          </div>

                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                      <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped">
                          <tbody>
                          <tr class="info">
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a>Full Name</a></td>
                            <td class="mailbox-name"><a >Email</a></td>
                            <td class="mailbox-subject"><a>Group</a></td>
                            <td class="mailbox-attachment"><a>Batch</a></td>
                            <td class="mailbox-date"><a>Company</a></td>
                            <td class="mailbox-date"><a>Country</a></td>
                            <td class="mailbox-subject"><a>Last updated On</a></td>
                            <td class="mailbox-subject"><a>Operations</a></td>
                          </tr>
                          @foreach($newUsers as $newUser)
                          <tr>
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a href=""><i class="fa fa-male"> {{$newUser->first_name}}{{$newUser->last_name}}</i></a></td>
                            <td class="mailbox-name"><a></i>{{$newUser->email}}</i></a></td>
                            <td class="mailbox-subject"><a >{{$newUser->group->group_name}}</a></td>
                            <td class="mailbox-attachment"><a>{{$newUser->batch->batch_name}}</a></td>
                            <td class="mailbox-date"><a href="#">{{$newUser->company->company_name}}</a></td>
                            <td class="mailbox-date"><a href="#">{{$newUser->country->country_name}}</a></td>
                            <td class="mailbox-subject"><a>{{$newUser->updated_at}}</a></td>
                            <td class="mailbox-subject"><div class="btn-group">
                              <a class="button btn btn-success btn-sm" href="{{route('editNewUser', ['id'=> $newUser->id])}}"><i class="fa fa-gear"></i> Edit</a>
                              {{ Form::open(array('url' => 'newusers/' . $newUser->id, 'class' => 'pull-right')) }}
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
