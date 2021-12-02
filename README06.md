## Setup Home Slider Page Part1

+ `$ php artisan maka:model Slider -m`を実行<br>

+ `create_sliders_table.php`を編集<br>

```
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sliders');
    }
}
```

+ `$ php artisan migrate`を実行<br>

+ `app\Models\Slider.php`を編集<br>

```
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
    ];
}
```

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
                <a class="sidenav-item-link" href="{{ route('home.slider') }}"> // 編集
                  <span class="nav-text">Slider</span>
                </a>
              </li>

              <li class="active">
                <a class="sidenav-item-link" href="index.html">
                  <span class="nav-text">Home About</span>
                </a>
              </li>

              <li class="active">
                <a class="sidenav-item-link" href="index.html">
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

+ `web.php`を編集<br>

```
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\HomeController;
use App\Models\Brand;
// use App\Models\User;
use Illuminate\Support\Facades\DB;

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/', function () {
    $brands = DB::table('brands')->get();

    return view('home')->with('brands', $brands);
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
Route::get('/home/slider', [HomeController::class, 'homeSlider'])->name('home.slider'); // 追記


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // $users = User::all();
    // $users = DB::table('users')->get();

    return view('admin.index');
})->name('dashboard');

Route::get('/user/logout', [BrandController::class, 'logout'])->name('user.logout');
```

+ `$ php artisan make:controller HomeController`を実行<br>

+ `resources/views/admin/slider`ディレクトリを作成<br>

+ `resources/views/admin/slider/index.blade.php`を作成<br>

+ `HomeController.php`を編集<br>

```
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class HomeController extends Controller
{
    public function homeSlider()
    {
        $sliders = Slider::latest()->get();

        return view('admin.slider.index')->with('sliders', $sliders);
    }
}
```

+ `resources/views/admin/slider/index.blade.php`を編集<br>

```
@extends('admin.admin_master')

@section('admin')
<div class="py-12">
  <div class="container">
    <div class="row">
      <h4>Home Slider</h4>
      <a href=""><button class="btn btn-info">Add Slider</button></a>
      <br><br>
      <div class="col-md-12">
        <div class="card">
          @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session("success") }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif

          <div class="card-header">All Slider</div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">SL</th>
                <th scope="col">Slider Title</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              {{-- @php ($i = 1) --}}
              @foreach($sliders as $slider)
              <tr>
                <th scope="row">{{ $sliders->firstItem() + $loop->index }}</th>
                <td>{{ $slider->title }}</td>
                <td>{{ $slider->description }}</td>
                <td><img src="{{ asset($slider->image) }}" style="height: 40px; width: 70px"></td>
                <td>
                  <a href="{{ url('slider/edit/'. $slider->id) }}" class="btn btn-info">Edit</a>
                  <a href="{{ url('slider/delete/' . $slider->id) }}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
```

## Setup Home Slider Page Part2

+ `resources/views/admin/slider/index.blade.php`を編集<br>

```
@extends('admin.admin_master')

@section('admin')
<div class="py-12">
  <div class="container">
    <div class="row">
      <h4>Home Slider</h4>
      <a href="{{ route('add.slider') }}"><button class="btn btn-info">Add Slider</button></a> // 編集
      <br><br>
      <div class="col-md-12">
        <div class="card">
          @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session("success") }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif

          <div class="card-header">All Slider</div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">SL</th>
                <th scope="col">Slider Title</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              {{-- @php ($i = 1) --}}
              @foreach($sliders as $slider)
              <tr>
                <th scope="row">{{ $sliders->firstItem() + $loop->index }}</th>
                <td>{{ $slider->title }}</td>
                <td>{{ $slider->description }}</td>
                <td><img src="{{ asset($slider->image) }}" style="height: 40px; width: 70px"></td>
                <td>
                  <a href="{{ url('slider/edit/'. $slider->id) }}" class="btn btn-info">Edit</a>
                  <a href="{{ url('slider/delete/' . $slider->id) }}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
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
use App\Models\Brand;
// use App\Models\User;
use Illuminate\Support\Facades\DB;

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/', function () {
    $brands = DB::table('brands')->get();

    return view('home')->with('brands', $brands);
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
Route::get('/add/slider', [HomeController::class, 'addSlider'])->name('add.slider'); // 追記


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // $users = User::all();
    // $users = DB::table('users')->get();

    return view('admin.index');
})->name('dashboard');

Route::get('/user/logout', [BrandController::class, 'logout'])->name('user.logout');
```

+ `HomeController.php`を編集<br>

```
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class HomeController extends Controller
{
    public function homeSlider()
    {
        $sliders = Slider::latest()->get();

        return view('admin.slider.index')->with('sliders', $sliders);
    }

    public function addSlider()
    {
        return view('admin.slider.create');
    }
}
```

+ `resources/views/admin/slider/create.blade.php`を作成<br>

+ `resources/views/admin/slider/create.blade.php`を編集<br>

```
@extends('admin.admin_master')

@section('admin')
<div class="col-lg-12">
  <div class="card card-default">
    <div class="card-header card-header-border-bottom">
      <h2>Create Slider</h2>
    </div>
    <div class="card-body">
      <form action="{{ route('store.slider') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">Slider Title</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="{{ old('title') }}" placeholder="Slider Title">
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Slider Description</label>
          <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Slider Image</label>
          <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <div class="form-footer pt-4 pt-5 mt-4 border-top">
          <button type="submit" class="btn btn-primary btn-default">Submit</button>
        </div>
      </form>
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
use App\Models\Brand;
// use App\Models\User;
use Illuminate\Support\Facades\DB;

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/', function () {
    $brands = DB::table('brands')->get();

    return view('home')->with('brands', $brands);
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


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // $users = User::all();
    // $users = DB::table('users')->get();

    return view('admin.index');
})->name('dashboard');

Route::get('/user/logout', [BrandController::class, 'logout'])->name('user.logout');
```

+ `HomeController.php`を編集<br>

```
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
```

+ `resources/views/admin/slider/index.blade.php`を修正<br>

```
@extends('admin.admin_master')

@section('admin')
<div class="py-12">
  <div class="container">
    <div class="row">
      <h4>Home Slider</h4>
      <a href="{{ route('add.slider') }}"><button class="btn btn-info">Add Slider</button></a>
      <br><br>
      <div class="col-md-12">
        <div class="card">
          @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session("success") }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif

          <div class="card-header">All Slider</div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">SL</th>
                <th scope="col">Slider Title</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @php ($i = 1) // コメントアウト解除
              @foreach($sliders as $slider)
              <tr>
                <th scope="row">{{ $i++ }}</th> // 修正
                <td>{{ $slider->title }}</td>
                <td>{{ $slider->description }}</td>
                <td><img src="{{ asset($slider->image) }}" style="height: 40px; width: 70px"></td>
                <td>
                  <a href="{{ url('slider/edit/'. $slider->id) }}" class="btn btn-info">Edit</a>
                  <a href="{{ url('slider/delete/' . $slider->id) }}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
```

## Setup Home Slider Page Part3

+ `resources/views/admin/slider/index.blade.php`を編集<br>

```
@extends('admin.admin_master')

@section('admin')
<div class="py-12">
  <div class="container">
    <div class="row">
      <h4>Home Slider</h4>
      <a href="{{ route('add.slider') }}"><button class="btn btn-info">Add Slider</button></a>
      <br><br>
      <div class="col-md-12">
        <div class="card">
          @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session("success") }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif

          <div class="card-header">All Slider</div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col" width="5%">SL</th>
                <th scope="col" width="15%">Slider Title</th>
                <th scope="col" width="25%">Description</th>
                <th scope="col" width="15%">Image</th>
                <th scope="col" width="15%">Action</th>
              </tr>
            </thead>
            <tbody>
              @php ($i = 1)
              @foreach($sliders as $slider)
              <tr>
                <th scope="row">{{ $i++ }}</th>
                <td>{{ $slider->title }}</td>
                <td>{{ $slider->description }}</td>
                <td><img src="{{ asset($slider->image) }}" style="height: 40px; width: 70px"></td>
                <td>
                  <a href="{{ url('slider/edit/'. $slider->id) }}" class="btn btn-info">Edit</a>
                  <a href="{{ url('slider/delete/' . $slider->id) }}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
```

+ `resources/views/layouts/body/slider.blade.php`を編集<br>

```
@php
$sliders = DB::table('sliders')->get();
@endphp
<!-- ======= Hero Section ======= -->
<section id="hero">
  <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

    <div class="carousel-inner" role="listbox">
      @foreach($sliders as $key => $slider)
      <!-- Slide 1 -->
      <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" style="background-image: url({{asset($slider->image)}});">
        <div class="carousel-container">
          <div class="carousel-content animate__animated animate__fadeInUp">
            <h2>{{ $slider->title }}</h2>
            <p>{{ $slider->description }}</p>
            <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

  </div>
</section><!-- End Hero -->
```
