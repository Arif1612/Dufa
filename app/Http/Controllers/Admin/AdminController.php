<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;
use toastr;

class AdminController extends Controller
{
    public function adminLoginForm()
    {
        return view('admin.admin_login');
    }

    public function adminLogin(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        if (Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])) {
            return redirect('/admin/dashboard');
        }else{
            Session::flash('error-msg','Invalid Email or Password !');
            return redirect()->back();
        }
    }

    public function adminLogout()
    {
        Auth::guard('admin')->logout();
        return redirect('login/admin');
    }
}
