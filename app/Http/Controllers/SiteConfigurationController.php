<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteConfigurationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function manageSliders()
    {
        return view('manage-sliders');
    }
    public function manageAbout()
    {
        return view('about-us');
    }
    public function manageServices()
    {
        return view('manage-services');
    }
}
