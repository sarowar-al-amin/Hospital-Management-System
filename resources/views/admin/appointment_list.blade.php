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
        <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
            <div  style="padding-top:100px;">
                <table>
                    <tr style="background-color:black;">
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
        <!-- partial -->
        <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.scripts')
    <!-- End custom js for this page -->
  </body>
</html>
