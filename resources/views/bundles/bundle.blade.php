@extends('layouts.master')


@section('style')


@endsection

@section('content')
 <!-- Content Header (Page header) -->

   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Bundle
       <small></small>
     </h1>

   </section>

    <!-- modal -->
   <div class="modal modal-info fade" id="modal-info">
     <div class="modal-dialog modal-lg">
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span></button>
           <h4 class="modal-title">Add bundle</h4>
         </div>
         <div class="modal-body">
                 <!-- Custom Tabs (Pulled to the right) -->
                 <form action="#" method="POST" id="frm-category-create">
                 {!! csrf_field() !!}
                   <div class="row">
                       <div class="form-group">
                         <label for="category_name" class="col-sm-3 control-label">bundle Name: </label>
                         <div class="col-sm-12">
                         <input type="text" class="form-control" name="category_name" id="category_name" placeholder="bundle Name">
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
                           <td class="mailbox-star"><a href="#">Category </a></td>

                         </tr>

                         <tr class="info">
                           <td><input type="checkbox"></td>
                           <td class="mailbox-star"><a href="#"></a></td>

                         </tr>
                    
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
$('#frm-category-create').on('submit',function(e){
 e.preventDefault();
 console.log('pressed');
 var data = $(this).serialize();
 console.log(data);
 $.post("{{route('createCategory')}}", data, function(response){

   console.log(response);
 });
});

</script>
@endsection
