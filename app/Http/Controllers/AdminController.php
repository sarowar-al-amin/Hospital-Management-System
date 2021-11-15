<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;

use App\Models\Appointment;

class AdminController extends Controller
{
    //
    public function addview(){
        // return view('admin.add_doctor');
        return view('adminlte-admin.add_doctor');
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
        // return view('admin.appointment_list',compact('data'));
        return view('adminlte-admin.appointment_list',compact('data'));
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

    //
    public function show_doctors(){
        $doctor_list = doctor::all();
        // return view('admin.show_doctors',compact('doctor_list'));
        return view('adminlte-admin.show_doctors',compact('doctor_list'));
    }

    //
    public function delete_doctor($id){
        $data = doctor::find($id);
        $data->delete();

        return redirect()->back();
    }

    //
    public function update_doctor($id){
        $data = doctor::find($id);

        // return view('admin.update_doctor',compact('data'));
        return view('adminlte-admin.update_doctor',compact('data'));
    }

    //
    public function edit_doctor(Request $request, $id){
        $doctor = doctor::find($id);

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

    public function add_multiple_doctor(){
        return view('adminlte-admin.add_multiple_doctors');
    }
}
