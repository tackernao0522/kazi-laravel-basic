## Setup Home Page Portfolio Section

+ `resources/views/admin/body/sidebar.blade.php`を編集<br>

```
<aside class="left-sidebar bg-sidebar">
  <div id="sidebar" class="sidebar sidebar-with-footer">
    <!-- Aplication Brand -->
    <div class="app-brand">
      <a href="/index.html">
        <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30" height="33" viewBox="0 0 30 33">
          <g fill="none" fill-rule="evenodd">
            <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
            <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
          </g>
        </svg>
        <span class="brand-name">Admin Dashboard</span>
      </a>
    </div>
    <!-- begin sidebar scrollbar -->
    <div class="sidebar-scrollbar">

      <!-- sidebar menu -->
      <ul class="nav sidebar-inner" id="sidebar-menu">
        <li class="has-sub active expand">
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
            <i class="mdi mdi-view-dashboard-outline"></i>
            <span class="nav-text">Home</span> <b class="caret"></b>
          </a>
          <ul class="collapse show" id="dashboard" data-parent="#sidebar-menu">
            <div class="sub-menu">
              <li class="active">
                <a class="sidenav-item-link" href="{{ route('home.slider') }}">
                  <span class="nav-text">Slider</span>
                </a>
              </li>

              <li class="active">
                <a class="sidenav-item-link" href="{{ route('home.about') }}">
                  <span class="nav-text">Home About</span>
                </a>
              </li>

              <li class="active">
                <a class="sidenav-item-link" href="{{ route('multi.image') }}">
                  <span class="nav-text">Home Portfolio</span>
                </a>
              </li>

              <li class="active">
                <a class="sidenav-item-link" href="{{ route('all.brand') }}">
                  <span class="nav-text">Home Brand</span>
                </a>
              </li>
            </div>
          </ul>
        </li>

        <li class="has-sub">
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements" aria-expanded="false" aria-controls="ui-elements">
            <i class="mdi mdi-folder-multiple-outline"></i>
            <span class="nav-text">UI Elements</span> <b class="caret"></b>
          </a>
          <ul class="collapse" id="ui-elements" data-parent="#sidebar-menu">
            <div class="sub-menu">
              <li class="has-sub">
                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#components" aria-expanded="false" aria-controls="components">
                  <span class="nav-text">Components</span> <b class="caret"></b>
                </a>
                <ul class="collapse" id="components">
                  <div class="sub-menu">
                    <li>
                      <a href="alert.html">Alert</a>
                    </li>

                    <li>
                      <a href="badge.html">Badge</a>
                    </li>

                    <li>
                      <a href="breadcrumb.html">Breadcrumb</a>
                    </li>

                    <li>
                      <a href="button-default.html">Button Default</a>
                    </li>

                    <li>
                      <a href="button-dropdown.html">Button Dropdown</a>
                    </li>

                    <li>
                      <a href="button-group.html">Button Group</a>
                    </li>

                    <li>
                      <a href="button-social.html">Button Social</a>
                    </li>

                    <li>
                      <a href="button-loading.html">Button Loading</a>
                    </li>

                    <li>
                      <a href="card.html">Card</a>
                    </li>

                    <li>
                      <a href="carousel.html">Carousel</a>
                    </li>

                    <li>
                      <a href="collapse.html">Collapse</a>
                    </li>

                    <li>
                      <a href="list-group.html">List Group</a>
                    </li>

                    <li>
                      <a href="modal.html">Modal</a>
                    </li>

                    <li>
                      <a href="pagination.html">Pagination</a>
                    </li>

                    <li>
                      <a href="popover-tooltip.html">Popover & Tooltip</a>
                    </li>

                    <li>
                      <a href="progress-bar.html">Progress Bar</a>
                    </li>

                    <li>
                      <a href="spinner.html">Spinner</a>
                    </li>

                    <li>
                      <a href="switcher.html">Switcher</a>
                    </li>

                    <li>
                      <a href="table.html">Table</a>
                    </li>

                    <li>
                      <a href="tab.html">Tab</a>
                    </li>
                  </div>
                </ul>
              </li>

              <li class="has-sub">
                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#icons" aria-expanded="false" aria-controls="icons">
                  <span class="nav-text">Icons</span> <b class="caret"></b>
                </a>
                <ul class="collapse" id="icons">
                  <div class="sub-menu">

                    <li>
                      <a href="material-icon.html">Material Icon</a>
                    </li>

                    <li>
                      <a href="flag-icon.html">Flag Icon</a>
                    </li>

                  </div>
                </ul>
              </li>

              <li class="has-sub">
                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#forms" aria-expanded="false" aria-controls="forms">
                  <span class="nav-text">Forms</span> <b class="caret"></b>
                </a>
                <ul class="collapse" id="forms">
                  <div class="sub-menu">

                    <li>
                      <a href="basic-input.html">Basic Input</a>
                    </li>

                    <li>
                      <a href="input-group.html">Input Group</a>
                    </li>

                    <li>
                      <a href="checkbox-radio.html">Checkbox & Radio</a>
                    </li>

                    <li>
                      <a href="form-validation.html">Form Validation</a>
                    </li>

                    <li>
                      <a href="form-advance.html">Form Advance</a>
                    </li>

                  </div>
                </ul>
              </li>

              <li class="has-sub">
                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#maps" aria-expanded="false" aria-controls="maps">
                  <span class="nav-text">Maps</span> <b class="caret"></b>
                </a>
                <ul class="collapse" id="maps">
                  <div class="sub-menu">

                    <li>
                      <a href="google-map.html">Google Map</a>
                    </li>

                    <li>
                      <a href="vector-map.html">Vector Map</a>
                    </li>

                  </div>
                </ul>
              </li>

              <li class="has-sub">
                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#widgets" aria-expanded="false" aria-controls="widgets">
                  <span class="nav-text">Widgets</span> <b class="caret"></b>
                </a>
                <ul class="collapse" id="widgets">
                  <div class="sub-menu">

                    <li>
                      <a href="general-widget.html">General Widget</a>
                    </li>

                    <li>
                      <a href="chart-widget.html">Chart Widget</a>
                    </li>

                  </div>
                </ul>
              </li>
            </div>
          </ul>
        </li>

        <li class="has-sub">
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#charts" aria-expanded="false" aria-controls="charts">
            <i class="mdi mdi-chart-pie"></i>
            <span class="nav-text">Charts</span> <b class="caret"></b>
          </a>
          <ul class="collapse" id="charts" data-parent="#sidebar-menu">
            <div class="sub-menu">
              <li>
                <a class="sidenav-item-link" href="chartjs.html">
                  <span class="nav-text">ChartJS</span>

                </a>
              </li>
            </div>
          </ul>
        </li>

        <li class="has-sub">
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages" aria-expanded="false" aria-controls="pages">
            <i class="mdi mdi-image-filter-none"></i>
            <span class="nav-text">Pages</span> <b class="caret"></b>
          </a>
          <ul class="collapse" id="pages" data-parent="#sidebar-menu">
            <div class="sub-menu">
              <li>
                <a class="sidenav-item-link" href="user-profile.html">
                  <span class="nav-text">User Profile</span>

                </a>
              </li>

              <li class="has-sub">
                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#authentication" aria-expanded="false" aria-controls="authentication">
                  <span class="nav-text">Authentication</span> <b class="caret"></b>
                </a>
                <ul class="collapse" id="authentication">
                  <div class="sub-menu">

                    <li>
                      <a href="sign-in.html">Sign In</a>
                    </li>

                    <li>
                      <a href="sign-up.html">Sign Up</a>
                    </li>

                  </div>
                </ul>
              </li>

              <li class="has-sub">
                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#others" aria-expanded="false" aria-controls="others">
                  <span class="nav-text">Others</span> <b class="caret"></b>
                </a>
                <ul class="collapse" id="others">
                  <div class="sub-menu">
                    <li>
                      <a href="invoice.html">invoice</a>
                    </li>

                    <li>
                      <a href="error.html">Error</a>
                    </li>
                  </div>
                </ul>
              </li>
            </div>
          </ul>
        </li>

        <li class="has-sub">
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#documentation" aria-expanded="false" aria-controls="documentation">
            <i class="mdi mdi-book-open-page-variant"></i>
            <span class="nav-text">Documentation</span> <b class="caret"></b>
          </a>
          <ul class="collapse" id="documentation" data-parent="#sidebar-menu">
            <div class="sub-menu">
              <li class="section-title">
                Getting Started
              </li>

              <li>
                <a class="sidenav-item-link" href="introduction.html">
                  <span class="nav-text">Introduction</span>

                </a>
              </li>

              <li>
                <a class="sidenav-item-link" href="setup.html">
                  <span class="nav-text">Setup</span>

                </a>
              </li>

              <li>
                <a class="sidenav-item-link" href="customization.html">
                  <span class="nav-text">Customization</span>

                </a>
              </li>

              <li class="section-title">
                Layouts
              </li>

              <li class="has-sub">
                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#headers" aria-expanded="false" aria-controls="headers">
                  <span class="nav-text">Layout Headers</span> <b class="caret"></b>
                </a>
                <ul class="collapse" id="headers">
                  <div class="sub-menu">

                    <li>
                      <a href="header-fixed.html">Header Fixed</a>
                    </li>

                    <li>
                      <a href="header-static.html">Header Static</a>
                    </li>

                    <li>
                      <a href="header-light.html">Header Light</a>
                    </li>

                    <li>
                      <a href="header-dark.html">Header Dark</a>
                    </li>

                  </div>
                </ul>
              </li>

              <li class="has-sub">
                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#sidebar-navs" aria-expanded="false" aria-controls="sidebar-navs">
                  <span class="nav-text">layout Sidebars</span> <b class="caret"></b>
                </a>
                <ul class="collapse" id="sidebar-navs">
                  <div class="sub-menu">

                    <li>
                      <a href="sidebar-open.html">Sidebar Open</a>
                    </li>

                    <li>
                      <a href="sidebar-minimized.html">Sidebar Minimized</a>
                    </li>

                    <li>
                      <a href="sidebar-offcanvas.html">Sidebar Offcanvas</a>
                    </li>

                    <li>
                      <a href="sidebar-with-footer.html">Sidebar With Footer</a>
                    </li>

                    <li>
                      <a href="sidebar-without-footer.html">Sidebar Without Footer</a>
                    </li>

                    <li>
                      <a href="right-sidebar.html">Right Sidebar</a>
                    </li>

                  </div>
                </ul>
              </li>

              <li>
                <a class="sidenav-item-link" href="rtl.html">
                  <span class="nav-text">RTL Direction</span>

                </a>
              </li>
            </div>
          </ul>
        </li>
      </ul>
    </div>

    <hr class="separator" />
  </div>
</aside>
```

+ `resources/views/admin/multipic/index.blade.php`を編集<br>

```
@extends('admin.admin_master')

@section('admin')
  <div class="py-12">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="card-group">
            @foreach($images as $multi)
              <div class="col-md-4 mt-5">
                <div class="card">
                  <img src="{{ asset($multi->image) }}">
                </div>
              </div>
            @endforeach
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <div class="card-header">Multi Image</div>
            <div class="card-body">
              <form action="{{ route('store.image') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Brand Image</label>
                  <input type="file" class="form-control" name="image[]" id="exampleInputEmail1" aria-describedby="emailHelp" multiple="">
                  @error('image')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary">Add Image</button>
              </form>
            </div>
          </div>
        </div>
      </div>
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
use App\Models\Brand;
use App\Models\Multipic; // 追記
// use App\Models\User;
use Illuminate\Support\Facades\DB;

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/', function () {
    $brands = DB::table('brands')->get();
    $abouts = DB::table('home_abouts')->first();
    $images = Multipic::all(); // 追記

    return view('home')
        ->with('brands', $brands)
        ->with('abouts', $abouts)
        ->with('images', $images); // 編集
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // $users = User::all();
    // $users = DB::table('users')->get();

    return view('admin.index');
})->name('dashboard');

Route::get('/user/logout', [BrandController::class, 'logout'])->name('user.logout');
```

+ `resources/views/home.blade.php`を編集<br>

```
@extends('layouts.master_home')

@section('home_content')
<!-- ======= About Us Section ======= -->
<section id="about-us" class="about-us">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>About Us</strong></h2>
    </div>

    <div class="row content">
      <div class="col-lg-6" data-aos="fade-right">
        <h2>{{ $abouts->title }}</h2>
        <h3>{{ $abouts->short_dis }}</h3>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
        <p>
          {{ $abouts->long_dis }}
        </p>
      </div>
    </div>
  </div>
</section><!-- End About Us Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Services</strong></h2>
      <p>Laborum repudiandae omnis voluptatum consequatur mollitia ea est voluptas ut</p>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box iconbox-blue">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
            </svg>
            <i class="bx bxl-dribbble"></i>
          </div>
          <h4><a href="">Lorem Ipsum</a></h4>
          <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box iconbox-orange ">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
            </svg>
            <i class="bx bx-file"></i>
          </div>
          <h4><a href="">Sed Perspiciatis</a></h4>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
        <div class="icon-box iconbox-pink">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
            </svg>
            <i class="bx bx-tachometer"></i>
          </div>
          <h4><a href="">Magni Dolores</a></h4>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box iconbox-yellow">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
            </svg>
            <i class="bx bx-layer"></i>
          </div>
          <h4><a href="">Nemo Enim</a></h4>
          <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box iconbox-red">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
            </svg>
            <i class="bx bx-slideshow"></i>
          </div>
          <h4><a href="">Dele Cardo</a></h4>
          <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
        <div class="icon-box iconbox-teal">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
            </svg>
            <i class="bx bx-arch"></i>
          </div>
          <h4><a href="">Divera Don</a></h4>
          <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Services Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Portfolio</h2>
    </div>

    <div class="row" data-aos="fade-up">
      <div class="col-lg-12 d-flex justify-content-center">

      </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up">
      @foreach($images as $img)
      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <img src="{{ $img->image }}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 1</h4>
          <p>App</p>
          <a href="{{ $img->image }}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"></a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section><!-- End Portfolio Section -->

<!-- ======= Our Clients Section ======= -->
<section id="clients" class="clients">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Brands</h2>
    </div>

    <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">
      @foreach($brands as $brand)
      <div class="col-lg-3 col-md-4 col-6">
        <div div class="client-logo">
          <img src="{{ $brand->brand_image }}" class="img-fluid" alt="">
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section><!-- End Our Clients Section -->
@endsection
```