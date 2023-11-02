<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    

    @include('admin.css')
  </head>
  <body style="overflow: hidden;">
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
      

        @include('admin.sidebar')

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->

        @include('admin.navbar')


        <!-- partial -->




    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row " >  
          <div class="col-12 grid-margin">
            <div class="card" style="background-color: #485063 ">
              <div class="card-body">
                <h4 class="card-title">Appoinment Status</h4>
                <div class="table-responsive">
                  <table class="table" >
                    <thead>
                      <tr>
                        <th>
                          <div class="form-check form-check-muted m-0">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input">
                            </label>
                          </div>
                        </th>
                        <th> Patient Name </th>
                        <th> Email </th>
                        <th> Contact </th>
                        <th> Doctor Name </th>
                        <th> Message </th>
                        <th> Date </th>
                        <th> Payment Status </th>
                        <th> Approve </th>
                        <th> Cancel </th>
                      </tr>
                    </thead>
                    <tbody>

                      @foreach ($alldata as $appoint )

                      <tr>
                        <td>
                          <div class="form-check form-check-muted m-0">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input">
                            </label>
                          </div>
                        </td>
                        <td>
                          <span class="ps-2">{{$appoint -> name}}</span>
                        </td>
                        <td> {{$appoint -> email}} </td>
                        <td>{{$appoint -> phone}}</td>
                        <td> {{$appoint -> doctor}}</td>
                        <td> {{$appoint -> message}} </td>
                        <td> {{$appoint -> date}} </td>
                        <td>
                          <div class="">{{$appoint -> status}}</div>
                        </td>

                        <td >
                          <a class="btn btn-success" href="{{url('approved' , $appoint -> id)}}">Approve</a>
                      </td>
                      <td >
                          <a class="btn btn-danger" href="{{url('canceled' , $appoint -> id)}}">Cancel</a>
                      </td>
                      </tr>

                      @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 





    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.script')
    
    <!-- End custom js for this page -->
  </body>
</html>