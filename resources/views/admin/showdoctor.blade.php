<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    


    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
      

        @include('admin.sidebar')

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->



        @include('admin.navbar')


        <!-- partial -->
 

        <div class="container-fluid page-body-wrapper">

            <div align = 'center' style="padding-top: 100px; ">

                <table style="border: 2px solid;">

                    <tr style="background-color: black; ">

                        <th style="border: 1px solid; padding: 10px ; font-size: 20px; color: white ; " >Doctor Name</th>
                        <th style="border: 1px solid; padding: 10px ; font-size: 20px; color: white ; " >Phone</th>
                        <th style="border: 1px solid; padding: 10px ; font-size: 20px; color: white ; " >Speciality</th>
                        <th style="border: 1px solid; padding: 10px ; font-size: 20px; color: white ; " >Room No</th>
                        <th style="border: 1px solid; padding: 10px ; font-size: 20px; color: white ; " >Image</th>

                        <th style="border: 1px solid; padding: 10px ; font-size: 20px; color: white ; " >Delete</th>
                      

                    
                    </tr>
                    @foreach ($data as $doctor )
                        
                    
                    <tr style="" align="center" >
                        
                        <td style="padding: 10px ; border: 1px solid;">{{$doctor -> name}}</td>
                        <td style="padding: 10px ; border: 1px solid;">{{$doctor -> phone}}</td>
                        <td style="padding: 10px ; border: 1px solid;">{{$doctor -> speciality}}</td>
                        <td style="padding: 10px ; border: 1px solid;">{{$doctor -> room}}</td>

                        <td> <img height="100" width="100" src="doctorimage/{{$doctor->image}}" alt="doctorimage"></td>

                        <td style="padding: 10px ; border: 1px solid;"> <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')" href="{{url('deletedoctor' , $doctor->id)}}">Delete</a></td>
                        
                    </tr>
                    
                    @endforeach

                </table>
            </div>

        </div>


    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.script')
    
    <!-- End custom js for this page -->
  </body>
</html>