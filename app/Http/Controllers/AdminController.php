<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointments;



class AdminController extends Controller
{
    public function addview(){

        if(Auth::id())

        {
            if(Auth::user() -> usertype == 1){
                
                return view('admin.add_doctor');
            }
            else{
                return redirect() -> back();
            }
            
        }

        else{
            return redirect ('login');
        }

    }

    public function newappointment(){

        return view('admin.showappointment');
    }

    public function upload(Request $request){
         // Create a new doctor instance
        $doctor = new doctor;

        // Retrieve the uploaded image file from the request
        $image = $request -> file;

        // Generate a unique image name based on the current timestamp and file extension
        $imagename = time() . '.' . $image -> getClientoriginalExtension();

        // Move the uploaded file to the 'doctorimage' directory with the generated unique name
        $request -> file -> move('doctorimage' , $imagename);

         // Assign the generated image name to the 'image' attribute of the doctor instance
        $doctor -> image = $imagename;

        // Retrieve other details of the doctor from the request and assign them to the doctor instance
        $doctor -> name = $request -> name;
        $doctor -> phone = $request -> number;
        $doctor -> room = $request -> room;
        $doctor -> speciality = $request -> speciality;

         // Save the doctor information to the database
        $doctor -> save();

         // Redirect back to the previous page with a success message
        return redirect()-> back() -> with('message' , 'Doctor Added Successfully');

    }

    public function showappointment(){

        if(Auth::id())

        {
            if(Auth::user() -> usertype == 1){

                $alldata = appointments::all();
                
                return view('admin.showappointment' , compact('alldata'));
            }
            else{
                return redirect() -> back();
            }
            
        }

        else{
            return redirect ('login');
        }

    }

    public function approved($id){

        $data = appointments::find($id);

        $data -> status = 'Approved';

        $data -> save();

        return redirect()-> back();

    }

    public function canceled($id){

        $data = appointments::find($id);

        $data -> status = 'Canceled';

        $data -> save();

        return redirect()-> back();

    }

    public function showdoctor(){

        if(Auth::id())

        {
            if(Auth::user() -> usertype == 1){


                $data = doctor::all();

                return view('admin.showdoctor' , compact('data'));
            }

            else {
                return redirect() -> back();
            }
    
        }

        else {
            return redirect ('login');
        }
    }



    public function deletedoctor($id){

        $data = doctor::find($id);

        $data -> delete();

        return redirect()-> back();

    }


}
