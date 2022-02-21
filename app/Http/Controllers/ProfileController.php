<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }

    public function about()
    {
        return view('profile.about');
    }

    public function friends()
    {
        return view('profile.friends');
    }

    public function photos()
    {
        return view('profile.photos');
    }

    public function videos()
    {
        return view('profile.videos');
    }

    public function workAndEducation()
    {
        return view('profile.works.create');
    }

    public function aboutDetails()
    {
        return view('profile.about-details.create');
    }
}
