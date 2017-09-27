@extends('layouts.mastercourse')


@section('style')


@endsection

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Student
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
            <h4 class="modal-title">Add Student</h4>
          </div>
          <div class="modal-body">
          <div class="table-responsive mailbox-messages">
          <table class="table table-hover table-striped" id="add-student-table">
          <tbody>
          <tr class="info">
          <td></td>
          <td class="mailbox-star"><a href="#">Student</a></td>
          <td class="mailbox-date"><a href="#">Company</a></td>
          </tr>
          @foreach($students as $student)
          <tr>
          <td><input type="checkbox" id="student_{{$student->newuser_id}}" value="{{$student->newuser_id}}"></td>
          <td class="mailbox-star"><a href="{{route('profile',['id'=> $student->newuser_id])}}"><i class="fa fa-male"> {{$student->first_name}}</i></a></td>
          <td class="mailbox-name">{{$student->company->company_name}}</i></a></td>
          </tr>
          @endforeach
          </tbody>
          </table>
          </div>  
         </div>
         <div class="modal-footer">
           <button type="submit" class="btn btn-primary" id="frm-student-add">Submit</button>
          </div> 
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
                      <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped" id="table-listing">
                          <tbody>
                          <tr class="info">
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a href="#">Student</a></td>
                            <td class="mailbox-date"><a href="#">Enrolled Date</a></td>
                            <td class="mailbox-date"><a href="#">Completion Date</a></td>
                            <td class="mailbox-date"><a href="#">Operation</a></td>
                          </tr>
                          @foreach($course->newUsers as $student)
                          <tr>
                            <td><input type="checkbox"></td>
                        
                            <td class="mailbox-star"><a href="{{route('profile',['id'=> $student->newuser_id])}}"><i class="fa fa-male"> {{$student->first_name}}</i></a></td>
                            <td class="mailbox-name">{{$student->startdate}}</i></a></td>
                            <td class="mailbox-date"></td>
                            <td class="mailbox-date"> <a class="button btn btn-default btn-sm" href="#"><i class="fa fa-gear"></i>Enrolled</button></td>
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
          <!-- /.tab-content -->
        </div>
        <!-- nav-tabs-custom -->
      </div>
      <!-- Main content -->
    </section>


@endsection

@section('script')
<script>
$('#frm-student-add').on('click',function(e){
  e.preventDefault();
  console.log('pressed');
  var idArray = [];
  $('#add-student-table input:checked').each(function() {

    console.log("Id: " + $(this).attr("id") + " Value: " + $(this).val());
    idArray.push($(this).val());
  });
  console.log(idArray);
  var data = {
    user:idArray
  };

  $.post("{{route('addUserToCourse',['id'=> $course->id])}}", data, function(response){

    console.log(response);
    $("[data-dismiss=modal]").trigger({ type: "click" });
    for (i=0; i< response.length; i++){
         $('#table-listing').append('<td><input type="checkbox"></td><td><a href="#">'+response[i].first_name
                                +'</a></td>'
                                +'<td><a>'+response[i].updated_at+'</a></td><td></td>'
                                +'<td><div class="btn-group">'
                                +'<a class="button btn btn-default btn-sm" href="{{route("editCategory", ["id"=> '+
                                +response[i].id+'])}}"><i class="fa fa-gear"></i> Edit</button>'+
                                "</div></td>'");
       }
  });

});

</script>
@endsection
