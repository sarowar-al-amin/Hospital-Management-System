<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class HomeController extends Controller
{
    //Sending admin and user in different pages
    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->usertype=='0'){
                return view('user.home');
            }else{
                return view('admin.home');
            }
        }else{
            return redirect()->back();
        }
    }

    // Index function or initial pages or landing page
    public function index(){
        return view('user.home');
    }
}
