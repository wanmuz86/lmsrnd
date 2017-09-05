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
                    <form role="form" action="#" method="POST" id="frm-category-update">
                  {!! csrf_field() !!}
                    <div class="box-body">
                      <div class="form-group">
                        <label for="category_name" class="col-sm-3 control-label">Category Name: </label>
                        <div class="col-sm-12">
                        <input type="text" class="form-control" name="category_name" id="category_name" value="{{$category->category_name}}">
                        </div>
                      </div>
                    </div>
                    <input type="hidden" name="category_id" value="{{$category->id}}">
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


$('#frm-category-update').on('submit',function(e){
  e.preventDefault();
  console.log('pressed');

  var data = $(this).serialize();
    console.log(data);
  $.post("{{route('updateCategory')}}", data, function(response){

    console.log(response);
  });

});


</script>
@endsection
