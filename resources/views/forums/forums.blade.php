@section('script')

@endsection
@extends('layouts.mastercourse')
@section('content')
<section class="content-header">
      <h1>
      Forums
      </h1>
      <ol class="breadcrumb">
        <button type="button" class="btn btn-info btn-sm " data-toggle="modal" data-target="#modal-info">
          Add
        </button>
        <li></li>
      </ol>
      <h5>Click on a forum to see its discussions and post messages.<h5>
    </section>

    <div class="modal modal-info fade" id="modal-info">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Add Forum</h4>
          </div>
          <div class="modal-body modal-lg">
            <div class="modal-body">
              <!-- Custom Tabs (Pulled to the right) -->

                    <form role="form">
                      <div class="box-body">
                        <div class="form-group text-black">
                          <label for="exampleInputEmail1">Title:</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
                        </div>
                        <div class="form-group text-black">
                          <label for="exampleInputEmail1">Description:</label>
                        <textarea name="name" rows="4" cols="90"></textarea>
                        </div>


                      </div>
                      <!-- /.box-body -->


                    </form>

              </div>
            </div>
          </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->

    <!-- /.modal -->

    <section class="content">
      <div class="col-md-12">
        <!-- Custom Tabs (Pulled to the right) -->


                      <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped">
                          <tbody>
                          <tr class="info">
                            <td class="mailbox-star"><a href="#">Name</a></td>
                            <td class="mailbox-name"><a href="#">Discussions</a></td>
                            <td class="mailbox-subject"><a>Unread</a></td>
                            <td class="mailbox-attachment"><a href="#">Updated</a></td>

                          </tr>
                          <tr>
                            <td class="mailbox-star"><a href="#"><i class="fa fa-list text-yellow"> Coding</i></a></td>
                            <td class="mailbox-name">-</td>
                            <td class="mailbox-subject">-</td>
                            <td class="mailbox-attachment"><a>-</a></td>

                          </tr>
                          <tr>
                            <td class="mailbox-star"><a href="#"><i class="fa fa-list text-yellow"> Coding</i></a></td>
                            <td class="mailbox-name">-</td>
                            <td class="mailbox-subject">-</td>
                            <td class="mailbox-attachment"><a>-</a></td>

                          </tr>
                          <tr>
                            <td class="mailbox-star"><a href="#"><i class="fa fa-list text-yellow"> Coding</i></a></td>
                            <td class="mailbox-name">-</td>
                            <td class="mailbox-subject">-</td>
                            <td class="mailbox-attachment"><a>-</a></td>

                          </tr>


                          </tbody>
                        </table>
                        <!-- /.table -->
                        </div>
        <!-- nav-tabs-custom -->
      </div>
      <!-- Main content -->
    </section>
    <!-- /.content -->

    @endsection
