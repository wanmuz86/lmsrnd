@extends('layouts.master')


@section('style')


@endsection

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Categories
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
                <a href="{{route('addCategory')}}">Add</a>
              </button>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
              <div class="box">

                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped" id="cat-table">
                          <tbody>
                          <tr class="info">
                            <td><input type="checkbox"></td>
                            <td class="mailbox-star"><a href="#">Category </a></td>
                            <td class="mailbox-subject"><a>Last updated On</a></td>
                            <td class="mailbox-subject"><a>Operations</a></td>

                          </tr>
                          @if (count($categories) > 0)
                          @foreach($categories as $category)
                          <tr class="info">
                            <td><input type="checkbox"></td>
                            <td><a href="#">{{$category->category_name}}</a></td>
                            <td><a>{{$category->updated_at}}</a></td>
                            <td class="mailbox-subject"><div class="btn-group">
                                <a class="button btn btn-default btn-sm" href="{{route('editCategory', ['id'=> $category->id])}}"><i class="fa fa-gear"></i> Edit</a>
                                {{ Form::open(array('url' => 'categories/' . $category->id, 'class' => 'pull-right')) }}
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
$('#frm-category-create').on('submit',function(e){
  e.preventDefault();
  console.log('pressed');
  var data = $(this).serialize();
  console.log(data);
  $.post("{{route('createCategory')}}", data, function(response){
    console.log(response);
     $("[data-dismiss=modal]").trigger({ type: "click" });
     $('#cat-table').append('<td><input type="checkbox"></td><td><a href="#">'+JSON.parse(response).category_name
                            +'</a></td>'
                            +'<td><a>'+JSON.parse(response).updated_at+'</a></td>'
                            +'<td><div class="btn-group">'
                            +'<a class="button btn btn-default btn-sm" href="{{route("editCategory", ["id"=> '+
                            +JSON.parse(response).id+'])}}"><i class="fa fa-gear"></i> Edit</button>'+
                            "</div></td>'");

  });
});

</script>
@endsection
