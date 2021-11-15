<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AdminLTE 3 | Starter</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="adminlte-admin/plugins/fontawesome-free/css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="adminlte-admin/dist/css/adminlte.min.css">
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">

            @include('adminlte-admin.navbar')
            <!-- /.navbar -->

            @include('adminlte-admin.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
            <!-- Content Header (Page header) -->
                <div  style="padding-top:100px;" align="center">
                    <table>
                        <tr style="background-color:black; color:white;">
                            <th style="padding:10px;">Customer Name</th>
                            <th style="padding:10px;">Email</th>
                            <th style="padding:10px;">Phone</th>
                            <th style="padding:10px;">Doctor Name</th>
                            <th style="padding:10px;">Date</th>
                            <th style="padding:10px;">Message</th>
                            <th style="padding:10px;">Status</th>
                            <th style="padding:10px;">Approve</th>
                            <th style="padding:10px;">Cancel</th>
                        </tr>
                        @foreach($data as $datum)
                        <tr align="center" style="background-color:skyblue; color:black">
                            <td>{{$datum->name}}</td>
                            <td>{{$datum->email}}</td>
                            <td>{{$datum->phone}}</td>
                            <td>{{$datum->doctor}}</td>
                            <td>{{$datum->date}}</td>
                            <td>{{$datum->message}}</td>
                            <td>{{$datum->status}}</td>
                            <td>
                                <a class="btn btn-success" href="{{url('approve_appoint',$datum->id)}}">Approve</a>
                            </td>
                            <td>
                            <a class="btn btn-danger" href="{{url('cancel_appoint',$datum->id)}}">Cancel</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
            </aside>
            <!-- /.control-sidebar -->

            <!-- Main Footer -->
            @include('adminlte-admin.footer')
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        <script src="adminlte-admin/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="adminlte-admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="adminlte-admin/dist/js/adminlte.min.js"></script>
    </body>
</html>
