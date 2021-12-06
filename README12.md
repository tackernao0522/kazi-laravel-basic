## How to add Toster in Project

+ `resources/views/admin/admin_master.blade.php`を編集<br>

```
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Easy - Admin Dashboard</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="{{ asset('backend/assets/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('backend/assets/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />
  <link href="{{ asset('backend/assets/plugins/flag-icons/css/flag-icon.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />
  <link href="{{ asset('backend/assets/plugins/ladda/ladda.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('backend/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('backend/assets/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="{{ asset('backend/assets/css/sleek.css') }}" />

  <link rel="stylesheet" type="text.css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" /> // 追記

  <!-- FAVICON -->
  <link href="assets/img/favicon.png" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="{{ asset('backend/assets/plugins/nprogress/nprogress.js') }}"></script>
</head>

<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
  <script>
    NProgress.configure({
      showSpinner: false
    });
    NProgress.start();
  </script>

  <div class="mobile-sticky-body-overlay"></div>

  <div class="wrapper">

    <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
    @include('admin.body.sidebar')

    <div class="page-wrapper">
      <!-- Header -->
      <header class="main-header " id="header">
        <nav class="navbar navbar-static-top navbar-expand-lg">
          <!-- Sidebar toggle button -->
          <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
          </button>
          <!-- search form -->
          <div class="search-form d-none d-lg-inline-block">
            <div class="input-group">
              <button type="button" name="search" id="search-btn" class="btn btn-flat">
                <i class="mdi mdi-magnify"></i>
              </button>
              <input type="text" name="query" id="search-input" class="form-control" placeholder="'button', 'chart' etc." autofocus autocomplete="off" />
            </div>
            <div id="search-results-container">
              <ul id="search-results"></ul>
            </div>
          </div>

          <div class="navbar-right ">
            <ul class="nav navbar-nav">
              <!-- Github Link Button -->
              <li class="github-link mr-3">
                <a class="btn btn-outline-secondary btn-sm" href="https://github.com/tafcoder/sleek-dashboard" target="_blank">
                  <span class="d-none d-md-inline-block mr-2">Source Code</span>
                  <i class="mdi mdi-github-circle"></i>
                </a>

              </li>
              <li class="dropdown notifications-menu">
                <button class="dropdown-toggle" data-toggle="dropdown">
                  <i class="mdi mdi-bell-outline"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li class="dropdown-header">You have 5 notifications</li>
                  <li>
                    <a href="#">
                      <i class="mdi mdi-account-plus"></i> New user registered
                      <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="mdi mdi-account-remove"></i> User deleted
                      <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 07 AM</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                      <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 12 PM</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="mdi mdi-account-supervisor"></i> New client
                      <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="mdi mdi-server-network-off"></i> Server overloaded
                      <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 05 AM</span>
                    </a>
                  </li>
                  <li class="dropdown-footer">
                    <a class="text-center" href="#"> View All </a>
                  </li>
                </ul>
              </li>
              <!-- User Account -->
              <li class="dropdown user-menu">
                <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <img src="{{ Auth::user()->profile_photo_url }}" class="user-image" alt="User Image" />
                  <span class="d-none d-lg-inline-block">{{ Auth::user()->name }}</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                  <!-- User image -->
                  <li class="dropdown-header">
                    <img src="{{ Auth::user()->profile_photo_url }}" class="img-circle" alt="User Image" />
                    <div class="d-inline-block">
                      {{ Auth::user()->name }} <small class="pt-1">{{ Auth::user()->email }}</small>
                    </div>
                  </li>

                  <li>
                    <a href="{{ route('profile.update') }}">
                      <i class="mdi mdi-account"></i> My Profile
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('change.password') }}">
                      <i class="mdi mdi-email"></i> Change Password
                    </a>
                  </li>
                  <li>
                    <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                  </li>
                  <li>
                    <a href="#"> <i class="mdi mdi-settings"></i> Account Setting </a>
                  </li>

                  <li class="dropdown-footer">
                    <a href="{{ route('user.logout') }}"> <i class="mdi mdi-logout"></i> Log Out </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <div class="content-wrapper">
        <div class="content">
          @yield('admin')
        </div>
      </div>

      <footer class="footer mt-auto">
        <div class="copyright bg-white">
          <p>
            &copy; <span id="copy-year">2019</span> Copyright Sleek Dashboard Bootstrap Template by
            <a class="text-primary" href="http://www.iamabdus.com/" target="_blank">Abdus</a>.
          </p>
        </div>
        <script>
          var d = new Date();
          var year = d.getFullYear();
          document.getElementById("copy-year").innerHTML = year;
        </script>
      </footer>
    </div>
  </div>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
  <script src="{{ asset('backend/assets/plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('backend/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('backend/assets/plugins/toaster/toastr.min.js') }}"></script>
  <script src="{{ asset('backend/assets/plugins/slimscrollbar/jquery.slimscroll.min.js') }}"></script>
  <script src="{{ asset('backend/assets/plugins/charts/Chart.min.js') }}"></script>
  <script src="{{ asset('backend/assets/plugins/ladda/spin.min.js') }}"></script>
  <script src="{{ asset('backend/assets/plugins/ladda/ladda.min.js') }}"></script>
  <script src="{{ asset('backend/assets/plugins/jquery-mask-input/jquery.mask.min.js') }}"></script>
  <script src="{{ asset('backend/assets/plugins/select2/js/select2.min.js') }}"></script>
  <script src="{{ asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
  <script src="{{ asset('backend/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
  <script src="{{ asset('backend/assets/plugins/daterangepicker/moment.min.js') }}"></script>
  <script src="{{ asset('backend/assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
  <script src="{{ asset('backend/assets/plugins/jekyll-search.min.js') }}"></script>
  <script src="{{ asset('backend/assets/js/sleek.js') }}"></script>
  <script src="{{ asset('backend/assets/js/chart.js') }}"></script>
  <script src="{{ asset('backend/assets/js/date-range.js') }}"></script>
  <script src="{{ asset('backend/assets/js/map.js') }}"></script>
  <script src="{{ asset('backend/assets/js/custom.js') }}"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> // 追記

  <script> // 追記
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}"
    switch (type) {
      case 'info':
        toastr.info(" {{ Session::get('message') }} ");
        break;
      case 'success':
        toastr.success(" {{ Session::get('message') }} ");
        break;
      case 'warning':
        toastr.warning(" {{ Session::get('message') }} ");
        break;
      case 'error':
        toastr.error(" {{ Session::get('message') }} ");
        break;
    }
    @endif
  </script>
</body>

</html>
```

+ `resources/views/admin/brand/index.blade.php`を編集<br>

```
@extends('admin.admin_master')

@section('admin')
<div class="py-12">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">All Brand</div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">SL No</th>
                                <th scope="col">Brand Name</th>
                                <th scope="col">Brand Image</th>
                                <th scope="col">Created_at</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php ($i = 1) --}}
                            @foreach($brands as $brand)
                            <tr>
                                <th scope="row">{{ $brands->firstItem() + $loop->index }}</th>
                                <td>{{ $brand->brand_name }}</td>
                                <td><img src="{{ asset($brand->brand_image) }}" style="height: 40px; width: 70px"></td>
                                <td>
                                    @if($brand->created_at == NULL)
                                    <span class="text-danger">No Date Set</span>
                                    @else
                                    {{ Carbon\Carbon::parse($brand->created_at)->diffForHumans() }}
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('brand/edit/'. $brand->id) }}" class="btn btn-info">Edit</a>
                                    <a href="{{ url('brand/delete/' . $brand->id) }}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $brands->links() }}
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Add Brand</div>
                    <div class="card-body">
                        <form action="{{ route('store.brand') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Brand Name</label>
                                <input type="text" class="form-control" name="brand_name" id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error('brand_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Brand Image</label>
                                <input type="file" class="form-control" name="brand_image" id="exampleInputEmail1" aria-describedby="emailHelp">
                                @error('brand_image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Add Brand</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
```

+ `BrandController.php`を編集<br>

```
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Multipic;
use Illuminate\Support\Carbon;
use Image;
use Auth;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function allBrand()
    {
        $brands = Brand::latest()->paginate(5);

        return view('admin.brand.index', compact('brands'));
    }

    public function storeBrand(Request $request)
    {
        $validatedData = $request->validate(
            [
                'brand_name' => 'required|unique:brands|min:4',
                'brand_image' => 'required|mimes:jpg,jpeg,png',
            ],
            [
                'brand_name.required' => 'Please Input Brand Name',
                'brand_name.min' => 'Brand Longer then 4 Character',
            ]
        );

        $brand_image = $request->file('brand_image');

        $name_gen = hexdec(uniqid()) . '.' . $brand_image->getClientOriginalExtension();
        Image::make($brand_image)->resize(300, 200)->save('image/brand/' . $name_gen);

        $last_img = 'image/brand/' . $name_gen;


        Brand::insert([
            'brand_name' => $request->brand_name,
            'brand_image' => $last_img,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Brand Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
        $brand = Brand::find($id);

        return view('admin.brand.edit')->with('brand', $brand);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate(
            [
                'brand_name' => 'required|min:4',
            ],
            [
                'brand_name.required' => 'Please Input Brand Name',
                'brand_name.min' => 'Brand Longer then 4 Character',
            ]
        );

        $old_image = $request->old_image;

        $brand_image = $request->file('brand_image');

        if ($brand_image) {
            $name_gen = hexdec(uniqid());
            $image_ext = strtolower($brand_image->getClientOriginalExtension());
            $img_name = $name_gen . '.' . $image_ext;
            $up_location = 'image/brand/';
            $last_img = $up_location . $img_name;
            $brand_image->move($up_location, $img_name);

            unlink($old_image);

            Brand::find($id)->update([
                'brand_name' => $request->brand_name,
                'brand_image' => $last_img,
                'created_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Brand Updated Successfully',
                'alert-type' => 'info'
            );

            return redirect()->back()->with($notification);
        } else {
            Brand::find($id)->update([
                'brand_name' => $request->brand_name,
                'created_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Brand Updated Successfully',
                'alert-type' => 'info'
            );

            return redirect()->back()->with($notification);
        }
    }

    public function delete($id)
    {
        $image = Brand::find($id);
        $old_image = $image->brand_image;
        unlink($old_image);

        Brand::find($id)->delete();

        $notification = array(
            'message' => 'Brand Delete Successfully',
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);
    }

    public function multipic()
    {
        $images = Multipic::all();

        return view('admin.multipic.index', compact('images'));
    }

    public function storeImg(Request $request)
    {
        $image = $request->file('image');

        foreach ($image as $multi_img) {
            $name_gen = hexdec(uniqid()) . '.' . $multi_img->getClientOriginalExtension();
            Image::make($multi_img)->resize(300, 300)->save('image/multi/' . $name_gen);

            $last_img = 'image/multi/' . $name_gen;


            Multipic::insert([
                'image' => $last_img,
                'created_at' => Carbon::now(),
            ]);
        }

        return redirect()->back()->with('success', 'Multi Image Inserted Successfully');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login')->with('success', 'User Logout');
    }
}
```

+ `resources/views/admin/brand/edit.blade.php`を編集<br>

```
@extends('admin.admin_master')

@section('admin')
<div class="py-12">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Edit brand</div>
          <div class="card-body">
            <form action="{{ url('brand/update/' . $brand->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="old_image" value="{{ $brand->brand_image }}">
              <div class="form-group">
                <label for="exampleInputEmail1">Update Brand Name</label>
                <input type="text" class="form-control" name="brand_name" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('brand_name', $brand->brand_name) }}">
                @error('brand_name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Update Brand Image</label>
                <input type="file" class="form-control" name="brand_image" value="{{ $brand->brand_image }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('brand_image')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>

              <div class="form-group">
                <img src="{{ asset($brand->brand_image) }}" style="width: 400px; height: 200px">
              </div>
              <button type="submit" class="btn btn-primary">Update Brand</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
```