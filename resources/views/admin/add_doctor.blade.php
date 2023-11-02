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
  




    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading" style="margin-left:10px; margin-top:5px;">
                    <p style="font-size: 23px; font-weight:bold" >Add Doctors here</p>
                </div>
                <div class="card-body">

                    @if(session() -> has('message'))

                    

                    <div class="alert alert-success">
                        {{session()-> get('message')}}
        
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"> 
                            X
                        </button>
        
        
                    </div>
        
                    @endif


                    <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="form-row">
                            <div class="name">Doctor name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="name" required="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name"> Phone </div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="number" name="number"  required="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Speciality</div>
                            <div class="value">
                                <div class="input-group">
                                    <select name="speciality" class="input--style-6">
                                        <option>--Select--</option>
                                        <option value="skin">Skin</option>
                                        <option value="physician">General Physician</option>
                                        <option value="eye">Eye Specialist</option>
                                        <option value="pathologist">Pathologist</option>
                
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name"> Room No. </div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="room" placeholder="Enter Room Number" required="">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Doctor Image</div>
                            <div class="value">
                                
                                <input type="file" name="file" id="file" style="color: black">
                                    
                            </div>
                        </div>

                        
                            <input type="submit" class="btn btn--radius-2 btn--blue-2" style="background-color:black; width:30%; margin-left:30%;" required="">
                        

                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>

</div>
    

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>


    


    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.script')
    
    <!-- End custom js for this page -->
  </body>
</html>