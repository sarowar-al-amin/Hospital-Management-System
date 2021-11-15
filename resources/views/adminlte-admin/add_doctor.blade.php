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
            <div class="content-wrapper">
            <!-- Content Header (Page header) -->
                <div class="container" align="center" style="padding-top:100px;">
                    <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div style="padding:15px;">
                            <label>Name</label>
                            <input type="text" name="name" style="color:black;" placeholder="Write the doctor's name" required="">
                        </div>
                        <div style="padding:15px;">
                            <label>Phone</label>
                            <input type="text" name="phone" style="color:black;" placeholder="Write the doctor's number" required="">
                        </div>
                        <div style="padding:15px;">
                            <label>Speciality</label>
                            <select name="speciality" style="width:236px; color:black;">
                                <option>--select--<option>
                                <option value="skin">skin<option>
                                <option value="heart">heart<option>
                                <option value="eye">eye<option>
                                <option value="gynocology">gynocology<option>
                            </select>
                        </div>
                        <div style="padding:15px;">
                            <label>Room number</label>
                            <input type="text" name="room" style="color:black;" placeholder="Write the doctor's room number" required="">
                        </div>
                        <div style="padding:15px;">
                            <label>Image</label>
                            <input type="file" name="file">
                        </div>
                        <div style="padding:15px;">
                            <input type="submit" class="btn btn-success">
                        </div>
                    </form>
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
