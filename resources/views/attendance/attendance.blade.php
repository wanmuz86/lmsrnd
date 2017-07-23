@extends('layouts.master')

@section('style')

@endsection

@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Attendance Summary
      </h1>
      <ol class="breadcrumb">
      </ol>
    </section>
    <!-- /.modal -->

    <section class="content">
      <div class="col-md-12">
        <!-- Custom Tabs (Pulled to the right) -->
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs ">
            <li class="active"><a href="#tab_1" data-toggle="tab">Detail</a></li>
            <li><a href="#tab_2" data-toggle="tab">Summary</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane" id="tab_1">
                <h3>Attendance not recorded yet.</h3>
            </div>

            <div class="tab-pane" id="tab_2">
              <div class="box">
                      <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped">
                          <tbody>
                          <tr class="info">
                            <td class="mailbox-star"><a href="#">Student</a></td>
                            <td class="mailbox-name"><a href="#">On Time</a></td>
                            <td class="mailbox-attachment"><a href="#">Arrived Late</a></td>
                            <td class="mailbox-date"><a href="#">Left Early</a></td>
                            <td class="mailbox-date"><a href="#">Absent</a></td>
                            <td class="mailbox-date"><a href="#">Excused</a></td>
                          </tr>
                          <tr>
                            <td class="mailbox-star"><a href="read-mail.html">Alexander Pierce</a></td>
                            <td class="mailbox-name"><a href="#">-</a></td>
                            <td class="mailbox-attachment"><a href="#">-</a></td>
                            <td class="mailbox-date"><a href="#">-</a></td>
                            <td class="mailbox-date"><a href="#">-</a></td>
                            <td class="mailbox-date"><a href="#">-</a></td>
                          </tr>
                          <tr>
                            <td class="mailbox-star"><a href="read-mail.html">Cristiano Ronaldo</a></td>
                            <td class="mailbox-name"><a href="#">-</a></td>
                            <td class="mailbox-attachment"><a href="#">-</a></td>
                            <td class="mailbox-date"><a href="#">-</a></td>
                            <td class="mailbox-date"><a href="#">-</a></td>
                            <td class="mailbox-date"><a href="#">-</a></td>
                          </tr>
                          </tbody>
                        </table>
                      </div>
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