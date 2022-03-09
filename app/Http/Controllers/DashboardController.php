<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();

        $photos = Photo::latest()->get();

        return view('dashboard')->with(compact('posts', 'photos'));
    }
}
