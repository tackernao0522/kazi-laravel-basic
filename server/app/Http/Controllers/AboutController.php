<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeAbout;

class AboutController extends Controller
{
    public function homeAbout()
    {
        $home_abouts = HomeAbout::latest()->get();

        return view('admin.home.index', compact('home_abouts'));
    }
}
