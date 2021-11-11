<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    @include('admin.css')
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
    <style type="text/css">
        label{
            display: inline-block;
            width: 200px;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
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
        <!-- main-panel ends -->
         </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.scripts')
    <!-- End custom js for this page -->
  </body>
</html>
