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
            <div  style="padding-top:100px;">
                <table>
                    <tr style="background-color:black;">
                        <th style="padding:10px;">Doctor Name</th>
                        <th style="padding:10px;">Phone</th>
                        <th style="padding:10px;">Speciality</th>
                        <th style="padding:10px;">Room</th>
                        <th style="padding:10px;">Image</th>
                        <th style="padding:10px;">Approve</th>
                        <th style="padding:10px;">Cancel</th>
                    </tr>
                    @foreach($doctor_list as $doctor)
                    <tr align="center" style="background-color:skyblue; color:black">
                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->phone}}</td>
                        <td>{{$doctor->speciality}}</td>
                        <td>{{$doctor->room}}</td>
                        <td>
                            <img height="100" width="100" src="doctorimage/{{$doctor->image}}">
                        </td>
                        <td>
                            <a class="btn btn-success" href="{{url('update_doctor',$doctor->id)}}">Update</a>
                        </td>
                        <td>
                        <a class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')"
                            href="{{url('delete_doctor',$doctor->id)}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.scripts')
    <!-- End custom js for this page -->
  </body>
</html>
