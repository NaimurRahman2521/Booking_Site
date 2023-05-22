<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        return view('website.home.index');
    }

    public function detail()
    {
        return view('website.detail.index');
    }

    public function about()
    {
        return view('website.about.index');
    }

    public function all_location()
    {
        return view('website.all-location.index');
    }

    public function gallery()
    {
        return view('website.gallery.index');
    }

    public function contact()
    {
        return view('website.contact.index');
    }
}
