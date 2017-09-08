@extends('layouts.master')


@section('style')


@endsection

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Company
      </h1>

    </section>

    <div class="modal modal-info fade" id="modal-info">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Add company</h4>
          </div>
          <div class="modal-body">
                  <!-- Custom Tabs (Pulled to the right) -->
                  <form action="#" method="POST" id="frm-company-create">
                  {!! csrf_field() !!}
                    <div class="row">
                        <div class="form-group">
                          <label for="category_name" class="col-sm-3 control-label">Company Name: </label>
                          <div class="col-sm-12">
                          <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Company Name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="company_email" class="col-sm-3 control-label">Email: </label>
                          <div class="col-sm-12">
                          <input type="text" class="form-control" name="company_email"  placeholder="Testing@gmail.com">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="company_address" class="col-sm-3 control-label">Address: </label>
                          <div class="col-sm-12">
                          <input type="text" class="form-control" name="company_address"  placeholder="Address">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="company_no" class="col-sm-3 control-label">Fon No. : </label>
                          <div class="col-sm-12">
                          <input type="text" class="form-control" name="company_no"  placeholder="Fon No.">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="category_name" class="col-sm-3 control-label">Company Logo</label>
                          <div class="col-sm-12">
                          <input name="company_logo" class="form-control" type="file" id="company_logo" >
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
                      <div class="mailbox-controls">

                      </div>
                      <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped">
                          <tbody>
                          <tr class="info">
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a href="#">Company</a></td>
                            <td class="mailbox-name"><a href="#">Email</a></td>
                            <td class="mailbox-subject"><a>Address</a></td>
                            <td class="mailbox-attachment"><a href="#">Fon No.</a></td>
                            <td class="mailbox-subject"><a>Last updated On</a></td>
                            <td class="mailbox-subject"><a>Operations</a></td>
                          </tr>
                          @if (count($companies) > 0)
                          @foreach($companies as $company)
                          <tr class="info">
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a href="#">{{$company->company_name}}</a></td>
                            <td class="mailbox-name"><a href="#"></a></td>
                            <td class="mailbox-subject"><a></a></td>
                            <td class="mailbox-date"><a href="#"></a></td>
                            <td class="mailbox-subject"><a>{{$company->updated_at}}</a></td>
                            <td class="mailbox-subject"><div class="btn-group">
                              <a class="button btn btn-success btn-sm" href="{{route('editCompany', ['id'=> $company->id])}}"><i class="fa fa-edit"></i> Edit</a>
                                {{ Form::open(array('url' => 'companies/' . $company->id, 'class' => 'pull-right')) }}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('Delete', array('class' => 'button btn btn-warning btn-sm')) }}
                                {{ Form::close() }}
                            </div></td>
                          </tr>
                       @endforeach

                       @endif
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
$('#frm-company-create').on('submit',function(e){
  e.preventDefault();
  console.log('pressed');
  var data = $(this).serialize();
  console.log(data);
  $.post("{{route('createCompany')}}", data, function(response){

    console.log(response);
    $("[data-dismiss=modal]").trigger({ type: "click" });
    $('#cat-table').append('<td><input type="checkbox"></td><td><a href="#">'+JSON.parse(response).company_name
                           +'</a></td>'
                           +'<td><a>'+JSON.parse(response).updated_at+'</a></td>'
                           +'<td><div class="btn-group">'
                           +'<a class="button btn btn-default btn-sm" href="{{route("editCompany", ["id"=> '+
                           +JSON.parse(response).id+'])}}"><i class="fa fa-gear"></i> Edit</button>'+
                           "</div></td>'");

  });
});

</script>
@endsection
