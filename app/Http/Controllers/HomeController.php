<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Barber;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::latest()->take(3)->get();
        $barbers = Barber::all();
        return view('frontend.home', compact('services','barbers'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function services()
    {
        $services = Service::all();
        return view('frontend.services', compact('services'));
    }

    public function barbers()
    {
        $barbers = Barber::all();
        return view('frontend.barbers', compact('barbers'));
    }

    public function gallery()
    {
        $galleries = Gallery::all();
        return view('frontend.gallery', compact('galleries'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }
}