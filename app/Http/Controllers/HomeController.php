<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Doctor;

use App\Models\Appointment;

class HomeController extends Controller
{
    //Sending admin and user in different pages
    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->usertype=='0'){
                $doctor = doctor::all();
                return view('user.home', compact('doctor'));
            }else{
                // return view('admin.home');
                return view('adminlte-admin.home');
            }
        }else{
            return redirect()->back();
        }
    }

    // Index function or initial pages or landing page
    public function index(){
        if(Auth::id()){
            return redirect('home');
        }else{
            $doctor = doctor::all();
            return view('user.home', compact('doctor'));
        }
        // $doctor = doctor::all();
        // return view('user.home', compact('doctor'));
    }

    //
    public function appointment(Request $reqquest){
        $data = new appointment;

        $data->name = $reqquest->name;
        $data->email = $reqquest->email;
        $data->phone = $reqquest->phone;
        $data->message = $reqquest->message;
        $data->doctor = $reqquest->doctor;
        $data->date = $reqquest->date;
        $data->status = "In progress";
        if(Auth::id()){
            $data->user_id = Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message', 'Appointment request successful. We will contact you soon.');
    }

    //
    public function myappointment(){
        if(Auth::id()){
            $userid = Auth::user()->id;
            $appoint = appointment::where('user_id', $userid)->get();
            return view('user.my_appointment', compact('appoint'));
        }else{
            return redirect()->back();
        }
    }

    //
    public function cancel_appointment($id){

        $data = appointment::find($id);
        $data->delete();

        return redirect()->back();
    }
}
