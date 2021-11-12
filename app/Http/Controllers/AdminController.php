<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;

use App\Models\Appointment;

class AdminController extends Controller
{
    //
    public function addview(){
        return view('admin.add_doctor');
    }

    public function upload(Request $request){
        $doctor = new doctor;

        $image = $request->file;
        $imagename = time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage',$imagename);

        $doctor->image = $imagename;
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->room = $request->room;
        $doctor->speciality = $request->speciality;

        $doctor->save();

        return redirect()->back();
    }

    //
    public function appointment_show(){
        $data = appointment::all();
        return view('admin.appointment_list',compact('data'));
    }

    //
    public function approve_appoint($id){
        $data = appointment::find($id);
        $data->status = "Approved";
        $data->save();

        return redirect()->back();
    }

    //
    public function cancel_appoint($id){
        $data = appointment::find($id);
        $data->status = "Cancel";
        $data->save();

        return redirect()->back();
    }
}
