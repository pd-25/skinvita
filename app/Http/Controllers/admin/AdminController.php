<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Doctor;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
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

    // admin doctrs view =====================================================================================================>
    public function doctrsView()
    {
        $doctors = Doctor::paginate(10);
        return view('admin.admin-doctors', compact('doctors'));
    }

    // admin doctors functions ====================================================================================================>
    public function addDoctor(Request $request)
    {
        $validated = $request->validate([
            'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'name'        => 'required|string|max:255',
            'specialist'  => 'required|string|max:255',
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '_' . uniqid() . '.' . $request->image->getClientOriginalExtension();
            $request->image->storeAs('uploads/doctors', $imageName, 'public');
            $validated['image'] = 'uploads/doctors/' . $imageName;
        }

        Doctor::create($validated);

        return redirect()->back()->with('success', 'Doctor added successfully!');
    }

    public function editDoctor(Request $request, $id)
    {
        $doctor = Doctor::findOrFail($id);

        $validated = $request->validate([
            'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'name'        => 'string|max:255',
            'specialist'  => 'string|max:255',
            'title'       => 'string|max:255',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            if ($doctor->image && Storage::disk('public')->exists($doctor->image)) {
                Storage::disk('public')->delete($doctor->image);
            }

            $imageName = time() . '_' . uniqid() . '.' . $request->image->getClientOriginalExtension();
            $request->image->storeAs('uploads/doctors', $imageName, 'public');
            $validated['image'] = 'uploads/doctors/' . $imageName;
        }

        $doctor->update($validated);

        return redirect()->back()->with('success', 'Doctor updated successfully!');
    }

    public function deleteDoctor($id)
    {
        $doctor = Doctor::findOrFail($id);
        if ($doctor->image && Storage::disk('public')->exists($doctor->image)) {
            Storage::disk('public')->delete($doctor->image);
        }
        $doctor->delete();
        return redirect()->back()->with('success', 'Doctor deleted successfully!');
    }

    // admin testimonial view =====================================================================================================>
    public function testimonialsView()
    {
        $testimonials = Testimonial::paginate(10);
        return view('admin.admin-testimonials', compact('testimonials'));
    }

    // admin testimonials functions ================================================================================================>
    public function addTestimonial(Request $request)
    {
        $validated = $request->validate([
            'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'name'        => 'required|string|max:255',
            'place'  => 'required|string|max:255',
            'feedback' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '_' . uniqid() . '.' . $request->image->getClientOriginalExtension();
            $request->image->storeAs('uploads/testimonial', $imageName, 'public');
            $validated['image'] = 'uploads/testimonial/' . $imageName;
        }

        Testimonial::create($validated);

        return redirect()->back()->with('success', 'Testimonial added successfully!');
    }

    public function editTestimonial(Request $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);

        $validated = $request->validate([
            'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'name'        => 'string|max:255',
            'place'  => 'string|max:255',
            'feedback' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            if ($testimonial->image && Storage::disk('public')->exists($testimonial->image)) {
                Storage::disk('public')->delete($testimonial->image);
            }

            $imageName = time() . '_' . uniqid() . '.' . $request->image->getClientOriginalExtension();
            $request->image->storeAs('uploads/testimonial', $imageName, 'public');
            $validated['image'] = 'uploads/testimonial/' . $imageName;
        }

        $testimonial->update($validated);

        return redirect()->back()->with('success', 'Testimonial updated successfully!');
    }

    public function deleteTestimonial($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        if ($testimonial->image && Storage::disk('public')->exists($testimonial->image)) {
            Storage::disk('public')->delete($testimonial->image);
        }
        $testimonial->delete();
        return redirect()->back()->with('success', 'Testimonial deleted successfully!');
    }
}
