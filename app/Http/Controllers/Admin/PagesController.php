<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.home_content');
    }

    public function aboutus()
    {
        return view('pages.aboutus');
    }

    public function event()
    {
        return view('pages.events');
    }

    public function news()
    {
        return view('pages.news');
    }

    public function notice()
    {
        return view('pages.notice');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
