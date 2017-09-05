@extends('layouts.master')


@section('style')


@endsection

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Country
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
                  <form action="#" method="POST" id="frm-country-create">
                  {!! csrf_field() !!}
                    <div class="row">
                        <div class="form-group">
                          <label for="category_name" class="col-sm-3 control-label">Country: </label>
                          <div class="col-sm-12">
                          <input type="text" class="form-control" name="country_name" id="country_name" placeholder="Country Name">
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
                        <table class="table table-hover table-striped">
                          <tbody>
                          <tr class="info">
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a href="#">Country </a></td>
                            <td class="mailbox-subject"><a>Last updated On</a></td>
                            <td class="mailbox-subject"><a>Operations</a></td>
                          </tr>
                          @if (count($countries) > 0)
                          @foreach($countries as $country)
                          <tr class="info">
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a href="#">{{$country->country_name}}</a></td>
                            <td class="mailbox-subject"><a>{{$country->updated_at}}</a></td>
                            <td class="mailbox-subject"><div class="btn-group">
                            <a class="button btn btn-default btn-sm" href="{{route('editCountry', ['id'=> $country->id])}}"><i class="fa fa-gear"></i> Edit</button>
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
$('#frm-country-create').on('submit',function(e){
  e.preventDefault();
  console.log('pressed');
  var data = $(this).serialize();
  console.log(data);
  $.post("{{route('createCountry')}}", data, function(response){

    console.log(response);
  });
});

</script>
@endsection
