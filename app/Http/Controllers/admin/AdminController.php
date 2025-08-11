<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    // register admin view =====================================================================================================>
    public function registerView()
    {

        return view('admin.admin-register');
    }

    // register admin =====================================================================================================>
    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $admin = new Admin();
        $admin->email = $request->email;
        $admin->password = $request->password;
        $admin->save();
        return redirect()->route('admin.login');
    }

    // login admin view =====================================================================================================>
    public function loginView()
    {
        return view('admin.admin-login');
    }

    // login admin =====================================================================================================>
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            Auth::guard('admins')->login($admin);

            return redirect()->route('admin.dashboard')->with('success', 'Login successful');
        }

        return redirect()->route('admin.login')->withErrors([
            'email' => 'Invalid email or password',
        ]);
    }

    // logout =====================================================================================================>
    public function logout()
    {
        Auth::guard('admins')->logout();
        return redirect()->route('admin.login');
    }

    // admin dashboard view =====================================================================================================>
    public function dashboradView()
    {
        return view('admin.admin-dashboard');
    }
}
