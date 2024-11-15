## Change Password Option Part1

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
                  <img src="{{ Auth::user()->profile_photo_url }}" class="user-image" alt="User Image" /> // 編集
                  <span class="d-none d-lg-inline-block">{{ Auth::user()->name }}</span> // 編集
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                  <!-- User image -->
                  <li class="dropdown-header">
                    <img src="{{ Auth::user()->profile_photo_url }}" class="img-circle" alt="User Image" /> // 編集
                    <div class="d-inline-block">
                    {{ Auth::user()->name }} <small class="pt-1">{{ Auth::user()->email }}</small> // 編集
                    </div>
                  </li>

                  <li>
                    <a href="profile.html">
                      <i class="mdi mdi-account"></i> My Profile
                    </a>
                  </li>
                  <li>
                    <a href="{{ route('change.password') }}"> // 編集
                      <i class="mdi mdi-email"></i> Change Password // 編集
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
</body>
</html>
```

+ `$ php artisan make:controller ChangePass`を実行<br>

+ `web.php`を編集<br>

```
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ChangePass;
use App\Models\Brand;
use App\Models\Multipic;
// use App\Models\User;
use Illuminate\Support\Facades\DB;

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/', function () {
    $brands = DB::table('brands')->get();
    $abouts = DB::table('home_abouts')->first();
    $images = Multipic::all();

    return view('home')
        ->with('brands', $brands)
        ->with('abouts', $abouts)
        ->with('images', $images);
});

Route::get('/home', function () {
    echo 'This is Home Page';
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Category Controller
Route::get('/category/all', [CategoryController::class, 'allCat'])->name('all.category');
Route::post('/category/add', [CategoryController::class, 'addCat'])->name('store.category');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit']);
Route::post('/category/update/{id}', [CategoryController::class, 'update']);
Route::get('/softdelete/category/{id}', [CategoryController::class, 'softDelete']);
Route::get('/category/restore/{id}', [CategoryController::class, 'restore']);
Route::get('/pdelete/category/{id}', [CategoryController::class, 'pDelete']);

// Brand Controller
Route::get('/brand/all', [BrandController::class, 'allBrand'])->name('all.brand');
Route::post('/brand/add', [BrandController::class, 'storeBrand'])->name('store.brand');
Route::get('/brand/edit/{id}', [BrandController::class, 'edit']);
Route::post('/brand/update/{id}', [BrandController::class, 'update']);
Route::get('/brand/delete/{id}', [BrandController::class, 'delete']);

// Multi Image Route
Route::get('/multi/image', [BrandController::class, 'multipic'])->name('multi.image');
Route::post('/multi/add', [BrandController::class, 'storeImg'])->name('store.image');

// Admin All Route
Route::get('/home/slider', [HomeController::class, 'homeSlider'])->name('home.slider');
Route::get('/add/slider', [HomeController::class, 'addSlider'])->name('add.slider');
Route::post('/store/slider', [HomeController::class, 'storeSlider'])->name('store.slider');

// Home Abut All Route
Route::get('/home/about', [AboutController::class, 'homeAbout'])->name('home.about');
Route::get('/add/about', [AboutController::class, 'addAbout'])->name('add.about');
Route::post('/store/about', [AboutController::class, 'storeAbout'])->name('store.about');
Route::get('/about/edit/{id}', [AboutController::class, 'editAbout']);
Route::post('/update/home_about/{id}', [AboutController::class, 'updateAbout']);
Route::get('/about/delete/{id}', [AboutController::class, 'deleteAbout']);

// Portfolio Page Route
Route::get('/portfolio', [AboutController::class, 'portfolio'])->name('portfolio');

// Admin Contact Page Route
Route::get('/admin/contact', [ContactController::class, 'adminContact'])->name('admin.contact');
Route::get('/admin/add/contact', [ContactController::class, 'adminAddContact'])->name('add.contact');
Route::post('/admin/store/contact', [ContactController::class, 'adminStoreContact'])->name('store.contact');
Route::get('/admin/message', [ContactController::class, 'adminMessage'])->name('admin.message');
Route::get('/message/delete/{id}', [ContactController::class, 'deleteMessage']);

// Home Contact Page Route
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact/form', [ContactController::class, 'contactForm'])->name('contact.form');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // $users = User::all();
    // $users = DB::table('users')->get();

    return view('admin.index');
})->name('dashboard');

Route::get('/user/logout', [BrandController::class, 'logout'])->name('user.logout');

// Change Password and User Profile Route
Route::get('/user/password', [ChangePass::class, 'cPassword'])->name('change.password'); // 追記
```

+ `resources/views/admin/body/change_password.blade.php`ファイルを作成<br>

```
@extends('admin.admin_master')

@section('admin')
<div class="card card-default">
  <div class="card-header card-header-border-bottom">
    <h2>Change Password</h2>
  </div>
  <div class="card-body">
    <form class="form-pill">
      <div class="form-group">
        <label for="exampleFormControlInput3">Current Password</label>
        <input type="password" class="form-control" id="exampleFormControlInput3" placeholder="Current Password">
      </div>
      <div class="form-group">
        <label for="exampleFormControlPassword3">New Password</label>
        <input type="password" class="form-control" id="exampleFormControlPassword3" placeholder="New Password">
      </div>
      <div class="form-group">
        <label for="exampleFormControlPassword3">Confirm Password</label>
        <input type="password" class="form-control" id="exampleFormControlPassword3" placeholder="Confirm Password">
      </div>

      <button type="submit" class="btn btn-primary btn-default">Save</button>
    </form>
  </div>
</div>
@endsection
```

+ `app/Http/Controllers/ChangePass.php`を編集<br>

```
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChangePass extends Controller
{
    public function cPassword()
    {
        return view('admin.body.change_password');
    }
}
```

## Change Password Option Part2

+ `resources/views/admin/body/change_password.blade.php`を編集<br>

```
@extends('admin.admin_master')

@section('admin')
<div class="card card-default">
  @if(session('error'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{ session("error") }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif

  <div class="card-header card-header-border-bottom">
    <h2>Change Password</h2>
  </div>
  <div class="card-body">
    <form method="POST" action="{{ route('password.update') }}" class="form-pill">
      @csrf
      <div class="form-group">
        <label for="exampleFormControlInput3">Current Password</label>
        <input type="password" name="oldPassword" class="form-control" id="current_password" placeholder="Current Password">
        @error('oldPassword')
        <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="exampleFormControlPassword3">New Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="New Password">
        @error('password')
        <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="exampleFormControlPassword3">Confirm Password</label>
        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm Password">
        @error('password_confirmation')
        <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>

      <button type="submit" class="btn btn-primary btn-default">Save</button>
    </form>
  </div>
</div>
@endsection
```

+ `web.php`を編集<br>

```
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ChangePass;
use App\Models\Brand;
use App\Models\Multipic;
// use App\Models\User;
use Illuminate\Support\Facades\DB;

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/', function () {
    $brands = DB::table('brands')->get();
    $abouts = DB::table('home_abouts')->first();
    $images = Multipic::all();

    return view('home')
        ->with('brands', $brands)
        ->with('abouts', $abouts)
        ->with('images', $images);
});

Route::get('/home', function () {
    echo 'This is Home Page';
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Category Controller
Route::get('/category/all', [CategoryController::class, 'allCat'])->name('all.category');
Route::post('/category/add', [CategoryController::class, 'addCat'])->name('store.category');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit']);
Route::post('/category/update/{id}', [CategoryController::class, 'update']);
Route::get('/softdelete/category/{id}', [CategoryController::class, 'softDelete']);
Route::get('/category/restore/{id}', [CategoryController::class, 'restore']);
Route::get('/pdelete/category/{id}', [CategoryController::class, 'pDelete']);

// Brand Controller
Route::get('/brand/all', [BrandController::class, 'allBrand'])->name('all.brand');
Route::post('/brand/add', [BrandController::class, 'storeBrand'])->name('store.brand');
Route::get('/brand/edit/{id}', [BrandController::class, 'edit']);
Route::post('/brand/update/{id}', [BrandController::class, 'update']);
Route::get('/brand/delete/{id}', [BrandController::class, 'delete']);

// Multi Image Route
Route::get('/multi/image', [BrandController::class, 'multipic'])->name('multi.image');
Route::post('/multi/add', [BrandController::class, 'storeImg'])->name('store.image');

// Admin All Route
Route::get('/home/slider', [HomeController::class, 'homeSlider'])->name('home.slider');
Route::get('/add/slider', [HomeController::class, 'addSlider'])->name('add.slider');
Route::post('/store/slider', [HomeController::class, 'storeSlider'])->name('store.slider');

// Home Abut All Route
Route::get('/home/about', [AboutController::class, 'homeAbout'])->name('home.about');
Route::get('/add/about', [AboutController::class, 'addAbout'])->name('add.about');
Route::post('/store/about', [AboutController::class, 'storeAbout'])->name('store.about');
Route::get('/about/edit/{id}', [AboutController::class, 'editAbout']);
Route::post('/update/home_about/{id}', [AboutController::class, 'updateAbout']);
Route::get('/about/delete/{id}', [AboutController::class, 'deleteAbout']);

// Portfolio Page Route
Route::get('/portfolio', [AboutController::class, 'portfolio'])->name('portfolio');

// Admin Contact Page Route
Route::get('/admin/contact', [ContactController::class, 'adminContact'])->name('admin.contact');
Route::get('/admin/add/contact', [ContactController::class, 'adminAddContact'])->name('add.contact');
Route::post('/admin/store/contact', [ContactController::class, 'adminStoreContact'])->name('store.contact');
Route::get('/admin/message', [ContactController::class, 'adminMessage'])->name('admin.message');
Route::get('/message/delete/{id}', [ContactController::class, 'deleteMessage']);

// Home Contact Page Route
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact/form', [ContactController::class, 'contactForm'])->name('contact.form');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // $users = User::all();
    // $users = DB::table('users')->get();

    return view('admin.index');
})->name('dashboard');

Route::get('/user/logout', [BrandController::class, 'logout'])->name('user.logout');

// Change Password and User Profile Route
Route::get('/user/password', [ChangePass::class, 'cPassword'])->name('change.password');
Route::post('/password/update', [ChangePass::class, 'updatePassword'])->name('password.update'); // 追記
```

+ `ChangePass.php`を編集<br>

```
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChangePass extends Controller
{
    public function cPassword()
    {
        return view('admin.body.change_password');
    }

    public function updatePassword()
    {

    }
}
```

## Change Password Option Part3

+ `ChangePass.php`を編集<br>

```
<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePass extends Controller
{
    public function cPassword()
    {
        return view('admin.body.change_password');
    }

    public function updatePassword(Request $request)
    {
        $validateData = $request->validate([
            'oldPassword' => 'required',
            'password' => 'required|confirmed'
        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldPassword, $hashedPassword)) {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();

            return redirect()->route('login')
                ->with('error', 'Password Is Change Successfully');
        } else {
            return redirect()->back()
                ->with('error', 'Current Password Is Invalid');
        }
    }
}
```

+ `resources/views/auth/login.blade.php`を編集<br>

```
<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title></title>

        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
        <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

        <!-- PLUGINS CSS STYLE -->
        <link href="{{ asset('backend/assets/plugins/toaster/toastr.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('backend/assets/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />
        <link href="{{ asset('backend/assets/plugins/flag-icons/css/flag-icon.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('backend/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />
        <link href="{{ asset('backend/assets/plugins/ladda/ladda.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('backend/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('backend/assets/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" />

        <!-- SLEEK CSS -->
        <link id="sleek-css" rel="stylesheet" href="{{ asset('backend/assets/css/sleek.css') }}" />



        <!-- FAVICON -->
        <link href="{{ asset('backend/assets/img/favicon.png') }}" rel="shortcut icon" />

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

</head>

<body class="bg-light-gray" id="body">
    <div class="container d-flex flex-column justify-content-between vh-100">
        <div class="row justify-content-center mt-5">
            <div class="col-xl-5 col-lg-6 col-md-10">
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="app-brand">
                            <a href="/index.html">
                                <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30" height="33" viewBox="0 0 30 33">
                                    <g fill="none" fill-rule="evenodd">
                                        <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                                        <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                                    </g>
                                </svg>
                                <span class="brand-name">Easy Dashboard</span>
                            </a>
                        </div>
                    </div>

                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session("success") }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    <div class="card-body p-5">

                        <h4 class="text-dark mb-5">Sign In</h4>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-12 mb-4">
                                    <input type="email" name="email" class="form-control input-lg" aria-describedby="emailHelp" value="{{ old('email') }}" placeholder="Email">
                                </div>
                                <div class="form-group col-md-12 ">
                                    <input type="password" name="password" class="form-control input-lg" placeholder="Password">
                                </div>
                                <div class="col-md-12">
                                    <div class="d-flex my-2 justify-content-between">
                                        <div class="d-inline-block mr-3">
                                            <label class="control control-checkbox">Remember me
                                                <input type="checkbox" />
                                                <div class="control-indicator"></div>
                                            </label>

                                        </div>
                                        <p><a class="text-blue" href="{{ route('password.request') }}">Forgot Your Password?</a></p>
                                    </div>
                                    <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Sign In</button>
                                    <p>Don't have an account yet ?
                                        <a class="text-blue" href="{{ route('register') }}">Sign Up</a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright pl-0">
            <p class="text-center">&copy; 2018 Copyright Easy Dashboard by
                <a class="text-primary" href="https://taka-project.work" target="_blank">Taka</a>.
            </p>
        </div>
    </div>
</body>

</html>
```
