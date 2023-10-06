<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class WebsiteController extends Controller
{

    /**
     * Show the application Website.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('website.welcome');
    }

    public function contact()
    {
        return view('website.contact');
    }

    public function faq()
    {
        return view('website.faq');
    }

    public function privacyPolicy()
    {
        return view('website.privacy');
    }


}
