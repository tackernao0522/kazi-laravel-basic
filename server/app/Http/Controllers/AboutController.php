<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\HomeAbout;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function homeAbout()
    {
        $home_abouts = HomeAbout::latest()->get();

        return view('admin.home.index', compact('home_abouts'));
    }

    public function addAbout()
    {
        return view('admin.home.create');
    }

    public function storeAbout(Request $request)
    {
        HomeAbout::insert([
            'title' => $request->title,
            'short_dis' => $request->short_dis,
            'long_dis' => $request->long_dis,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('home.about')
            ->with('sucess', 'About Inserted Succsessfully');
    }
}