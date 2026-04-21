<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
