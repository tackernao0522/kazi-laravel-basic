<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\HomeAbout;
use App\Models\Multipic;

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

    public function editAbout($id)
    {
        $home_about = HomeAbout::find($id);

        return view('admin.home.edit')->with('home_about', $home_about);
    }

    public function updateAbout(Request $request, $id)
    {
        HomeAbout::find($id)->update([
            'title' => $request->title,
            'short_dis' => $request->short_dis,
            'long_dis' => $request->long_dis,
        ]);

        return redirect()->route('home.about')
            ->with('success', 'About Updated Successfully');
    }

    public function deleteAbout($id)
    {
        HomeAbout::find($id)->delete();

        return redirect()->back()
            ->with("success", "About Delete Successfully");
    }

    public function portfolio()
    {
        $images = Multipic::all();

        return view('pages.portfolio', compact('images'));
    }
}
