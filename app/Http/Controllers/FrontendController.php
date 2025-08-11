<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        $doctors = Doctor::all();
        return view('index', compact('testimonials', 'doctors'));
    }

    public function about()
    {
        return view('about');
    }
    public function botox()
    {
        return view('botox');
    }

    public function bodySculpting()
    {
        return view('body-sculpting');
    }

    public function dermapenAndDermaroller()
    {
        return view('dermapen-and-dermaroller');
    }

    public function fillers()
    {
        return view('fillers');
    }

    public function stemCellTreatment()
    {
        return view('stem-cell-treatment');
    }

    public function hairTransplant()
    {
        return view('hair-transplant');
    }

    public function mesotherapy()
    {
        return view('mesotherapy');
    }

    public function doubleChinReduction()
    {
        return view('double-chin-reduction');
    }

    public function skinRejuvenation()
    {
        return view('skin-rejuvenation');
    }

    public function lasers()
    {
        return view('lasers');
    }

    public function medifacial()
    {
        return view('medifacial');
    }

    public function prp()
    {
        return view('prp');
    }

    public function ourDoctors()
    {
        $doctors = Doctor::all();
        return view('our-doctors', compact('doctors'));
    }

    public function contactUs()
    {
        return view('contact-us');
    }
}
