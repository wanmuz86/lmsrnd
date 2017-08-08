@extends('layouts.mastercourse')


@section('style')


@endsection

@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="form-group">
        <h1>
        Lessons
        </h1>
        <p>Lessons and sections can be completed in any order. ID={{$course->id}}  Name={{$course->course_name}}</p>
      </div>

      <ol class="breadcrumb">
        <div class="form-group">
          <div class="btn-group">
            <button type="button" class="btn btn-default btn-sm " data-toggle="modal" data-target="#modal-info"><i class="fa  fa-plus"> Add</i></button>
            <button type="button" class="btn btn-default btn-sm"><i class="fa  fa-bar-chart"> Analytics</i></button>

          </div>
            <button type="button" class="btn btn-default btn-sm "><i class="fa  fa-list-ul"></i></button>
        </div>
        <div class="form-group">
          <div class="btn-group">
            <button type="button" class="btn btn-default btn-sm "><i><input type="checkbox"> Select all</i></button>
            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-thumb-tack"> Current</i></button>
            <button type="button" class="btn btn-default btn-sm "><i class="fa  fa-trash"> Delete</i></button>
          </div>

        </div>

      </ol>

    </section>

    <section class="content">

          <div class="form-group">
        <div class="modal modal-info fade" id="modal-info">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Lessons</h4>
              </div>
                <div class="modal-body">
                  <!-- Custom Tabs (Pulled to the right) -->

                  <form role="form">
                    <div class="row">

                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Title: </label>

                          <div class="col-sm-9">
                          <input type="text" class="form-control" id="startdate" placeholder="Title">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Description: </label>

                          <div class="col-sm-9">
                          <textarea name="name" rows="4" cols="90"></textarea>
                        </div>
                      </div>
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Date: </label>

                          <div class="col-sm-9">
                          <input type="date" class="form-control" id="startdate" placeholder="Start Date">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-3 control-label">Position: </label>

                          <div class="col-sm-9">
          								<select class="form-control " data-placeholder="Select " style="width: 100%;">
          									 <option></option>
          									 <option></option>
          									 <option></option>
          									 <option></option>
          									 <option></option>
          								</select>
          					</div>
                        </div>

                    </div>

                  </form>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        <div class="box-body col-sm-3">
          {{ Html::image('img/photo2.png', 'Photo',  array('class' => 'img-responsive pad')) }}
          <p>I took this photo this morning. What do you guys think?</p>
          <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
          <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
          <span class="pull-right text-muted">127 likes - 3 comments</span>
        </div>
        <!-- /.box-body -->

        <!-- Main content -->
      </section>
      <!-- /.content -->

@endsection

@section('script')

@endsection
