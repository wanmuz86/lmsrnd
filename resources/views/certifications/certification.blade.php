@extends('layouts.mastercourse')


@section('style')


@endsection

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Certification <small>  Course: {{$course->course_name}}</small>
      </h1>
      <ol class="breadcrumb">
        <button type="button" class="btn btn-info btn-sm " data-toggle="modal" data-target="#modal-info">
        Add
        </button>
        <li></li>
      </ol>
    </section>

    <div class="modal modal-info fade" id="modal-info">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Add Certificate</h4>
          </div>
          <div class="modal-body">
                  <!-- Custom Tabs (Pulled to the right) -->
                  <form action="#" method="POST" id="frm-certificate-create">
                  {!! csrf_field() !!}
                    <div class="row">
                        <div class="form-group">
                          <label for="certificate_title" class="col-sm-3 control-label">Certificate Title: </label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="certificate_title" id="certificate_title" placeholder="certificate title">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="certificate_desc" class="col-sm-3 control-label">Certificate Description: </label>
                          <div class="col-sm-9">
                          <textarea name="certificate_desc" id="certificate_desc" class="form-control" rows="4" cols="80"></textarea>
                          </div>
                        </div>
                      <input type="hidden" name="course_id" value="{{$course->id}}">
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
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
              <div class="box">

                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      <div class="mailbox-controls">


                        <!-- /.pull-right -->
                      </div>

                      <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped">
                          <tbody>
                          <tr class="info ">
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a>Certificate title</a></td>
                            <td class="mailbox-name"><a >Certificate Description</a></td>

                          </tr>
                          @foreach($certificates as $ctf)
                          <tr>
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a href="#"><i class="fa fa-book"></i> {{$ctf->certificate_title}}</a></td>
                            <td class="mailbox-name"><a><i> {{$ctf->certificate_desc}}</i></a></td>

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
$('#frm-certificate-create').on('submit',function(e){
  e.preventDefault();
  console.log('pressed');
  var data = $(this).serialize();
  $.post("{{route('createCertificate',['id'=> $course->id])}}", data, function(response){

    console.log(response);
  });
});


$('#buttonmodule').on('click',function(e){

  console.log("testing");

  });

</script>
@endsection
