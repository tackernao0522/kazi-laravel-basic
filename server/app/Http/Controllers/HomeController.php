<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Carbon;
use Image;
use Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function homeSlider()
    {
        $sliders = Slider::latest()->get();

        return view('admin.slider.index')->with('sliders', $sliders);
    }

    public function addSlider()
    {
        return view('admin.slider.create');
    }

    public function storeSlider(Request $request)
    {
        $slider_image = $request->file('image');

        $name_gen = hexdec(uniqid()) . '.' . $slider_image->getClientOriginalExtension();
        Image::make($slider_image)->resize(1920, 1088)->save('image/slider/' . $name_gen);

        $last_img = 'image/slider/' . $name_gen;


        Slider::insert([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $last_img,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('home.slider')->with('success', 'Slider Inserted Successfully');
    }
}
