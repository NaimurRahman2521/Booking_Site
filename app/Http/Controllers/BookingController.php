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
}
