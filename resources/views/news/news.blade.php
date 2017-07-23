@extends('layouts.master')

@section('style')

@endsection

@section('content')


 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      News
      </h1>

    </section>

    <section class="content">
      <div class="form-group">
        <div class="btn-group">
          <button type="button" class="btn btn-default btn-sm " data-toggle="modal" data-target="#modal-info"><i class="fa  fa-plus"> Post</i></button>
          <button type="button" class="btn btn-default btn-sm"><i class="fa fa-bell"> Announcement</i></button>
          <button type="button" class="btn btn-default btn-sm "><i class="fa  fa-rss"> RSS feeds</i></button>
        </div>

        <div class="modal modal-info fade" id="modal-info">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">News</h4>
              </div>
              <div class="modal-body modal-lg">
                <div class="modal-body">
                  <!-- Custom Tabs (Pulled to the right) -->

                        <form role="form">
                          <div class="box-body">
                            <div class="form-group text-black">
                              <textarea name="name" rows="4" cols="90"></textarea>
                            </div>
                          </div>
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

        <div class="attachment-block clearfix">
        {{ Html::image('img/photo1.png', 'Attachment Image',  array('class' => 'attachment-img')) }}

          <div class="attachment-pushed">
            <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>

            <div class="attachment-text">
              Description about the attachment can be placed here.
              Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
            </div>
            <!-- /.attachment-text -->
          </div>
          <!-- /.attachment-pushed -->
        </div>
        <!-- Main content -->
      </section>
      <!-- /.content -->
    </div>


@endsection

@section('script')

@endsection
