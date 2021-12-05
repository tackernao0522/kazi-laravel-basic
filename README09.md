## Setup Contact Page Part1

+ `php artisan make:model Contact -m`を実行<br>

+ `create_contacts_table.php`を編集<br>

```
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->text('address');
            $table->string('email');
            $table->string('phone');
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
        Schema::dropIfExists('contacts');
    }
}
```

+ `app/Models/Contact.php`を編集<br>

```
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'email',
        'phone',
    ];
}
```

+ `php artisan migrate`を実行<br>


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
            <span class="nav-text">Contact Page</span> <b class="caret"></b>
          </a>
          <ul class="collapse" id="ui-elements" data-parent="#sidebar-menu">
            <div class="sub-menu">
              <li class="active">
                <a class="sidenav-item-link" href="{{ route('admin.contact') }}"> // 編集
                  <span class="nav-text">Contact Profile</span>
                </a>
              </li>

              <li class="active">
                <a class="sidenav-item-link" href="">
                  <span class="nav-text">Contact Message</span>
                </a>
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

+ `$ php artisan make:controller ContactController`を実行<br>

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

// Admin Contact Page Route 追記
Route::get('/admin/contact', [ContactController::class, 'adminContact'])->name('admin.contact');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // $users = User::all();
    // $users = DB::table('users')->get();

    return view('admin.index');
})->name('dashboard');

Route::get('/user/logout', [BrandController::class, 'logout'])->name('user.logout');
```

+ `resources/views/admin/contact`ディレクトリを作成<br>

+ `resources/views/admin/contact/index.blade.php`ファイルを作成<br>

+ `resources/views/admin/contact/create.blade.php`ファイルを作成<br>

+ `ContactController.php`を編集<br>

```
<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adminContact()
    {
        $contacts = Contact::all();

        return view('admin.contact.index')
            ->with('contacts', $contacts);
    }
}
```

+ `resources/views/admin/contact/index.blade.php`を編集<br>

```
@extends('admin.admin_master')

@section('admin')
<div class="py-12">
  <div class="container">
    <div class="row">
      <h4>Contact Page</h4>
      <a href="{{-- route('add.contact') --}}"><button class="btn btn-info">Add Contact</button></a>
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

          <div class="card-header">All Contact Data</div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col" width="5%">SL</th>
                <th scope="col" width="15%">Contact Address</th>
                <th scope="col" width="25%">Contact Email</th>
                <th scope="col" width="15%">Contact Phone</th>
                <th scope="col" width="15%">Action</th>
              </tr>
            </thead>
            <tbody>
              @php ($i = 1)
              @foreach($contacts as $contact)
              <tr>
                <th scope="row">{{ $i++ }}</th>
                <td>{{ $contact->address }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td>
                  <a href="{{ url('contact/edit/' . $contact->id) }}" class="btn btn-info">Edit</a>
                  <a href="{{ url('contact/delete/' . $contact->id) }}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>
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

## Setup Contact Page Part2

+ `resources/views/admin/contact/index.blade.php`を編集<br>

```
@extends('admin.admin_master')

@section('admin')
<div class="py-12">
  <div class="container">
    <div class="row">
      <h4>Contact Page</h4>
      <a href="{{ route('add.contact') }}"><button class="btn btn-info">Add Contact</button></a> // 編集
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

          <div class="card-header">All Contact Data</div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col" width="5%">SL</th>
                <th scope="col" width="15%">Contact Address</th>
                <th scope="col" width="25%">Contact Email</th>
                <th scope="col" width="15%">Contact Phone</th>
                <th scope="col" width="15%">Action</th>
              </tr>
            </thead>
            <tbody>
              @php ($i = 1)
              @foreach($contacts as $contact)
              <tr>
                <th scope="row">{{ $i++ }}</th>
                <td>{{ $contact->address }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td>
                  <a href="{{ url('contact/edit/' . $contact->id) }}" class="btn btn-info">Edit</a>
                  <a href="{{ url('contact/delete/' . $contact->id) }}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>
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
use App\Http\Controllers\AboutController;
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
Route::get('/admin/add/contact', [ContactController::class, 'adminAddContact'])->name('add.contact'); // 追記



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // $users = User::all();
    // $users = DB::table('users')->get();

    return view('admin.index');
})->name('dashboard');

Route::get('/user/logout', [BrandController::class, 'logout'])->name('user.logout');
```

+ `ContactController.php`を編集<br>

```
<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adminContact()
    {
        $contacts = Contact::all();

        return view('admin.contact.index')
            ->with('contacts', $contacts);
    }

    public function adminAddContact()
    {
        return view('admin.contact.create');
    }
}
```

+ `resources/views/admin/contact/create.blade.php`を編集<br>

```
@extends('admin.admin_master')

@section('admin')
<div class="col-lg-12">
  <div class="card card-default">
    <div class="card-header card-header-border-bottom">
      <h2>Create Contact</h2>
    </div>
    <div class="card-body">
      <form action="{{ route('store.contact') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">Contact Email</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" name="email" value="{{ old('email') }}" placeholder="Contact Email">
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Contact Phone</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="phone" value="{{ old('phpne') }}" placeholder="Contact Phone">
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Contact Address</label>
          <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3">{{ old('address') }}</textarea>
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
use App\Http\Controllers\AboutController;
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
Route::post('/admin/store/contact', [ContactController::class, 'adminStoreContact'])->name('store.contact'); // 追記



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // $users = User::all();
    // $users = DB::table('users')->get();

    return view('admin.index');
})->name('dashboard');

Route::get('/user/logout', [BrandController::class, 'logout'])->name('user.logout');
```

+ `ContactController.php`を編集<br>

```
<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adminContact()
    {
        $contacts = Contact::all();

        return view('admin.contact.index')
            ->with('contacts', $contacts);
    }

    public function adminAddContact()
    {
        return view('admin.contact.create');
    }

    public function adminStoreContact(Request $request)
    {
        Contact::insert([
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('admin.contact')
            ->with('success', 'Contact Inserted Successfully');
    }
}
```

## Setup Contact Page Part3

+ `resources/views/layouts/body/header.blade.php`を編集<br>

```
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">
    <h1 class="logo mr-auto"><a href="index.html"><span>Com</span>pany</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="active"><a href="/">Home</a></li>

        <li class="drop-down"><a href="">About</a>
          <ul>
            <li><a href="about.html">About Us</a></li>
            <li><a href="team.html">Team</a></li>
            <li><a href="testimonials.html">Testimonials</a></li>
            <li class="drop-down"><a href="#">Deep Drop Down</a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li><a href="services.html">Services</a></li>
        <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
        <li><a href="pricing.html">Pricing</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li> // 編集
      </ul>
    </nav><!-- .nav-menu -->

    <div class="header-social-links">
      <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
      <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
      <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
      <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
    </div>
  </div>
</header>
<!-- End Header -->
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

// Home Contact Page Route
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // $users = User::all();
    // $users = DB::table('users')->get();

    return view('admin.index');
})->name('dashboard');

Route::get('/user/logout', [BrandController::class, 'logout'])->name('user.logout');
```

+ `ContactController.php`を編集<br>

```
<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adminContact()
    {
        $contacts = Contact::all();

        return view('admin.contact.index')
            ->with('contacts', $contacts);
    }

    public function adminAddContact()
    {
        return view('admin.contact.create');
    }

    public function adminStoreContact(Request $request)
    {
        Contact::insert([
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('admin.contact')
            ->with('success', 'Contact Inserted Successfully');
    }

    public function contact()
    {
        $contacts = DB::table('contacts')->first();

        return view('pages.contact')
            ->with('contacts', $contacts);
    }
}
```

+ `resources/views/pages/contact.blade.php`ファイルを作成<br>

```
@extends('layouts.master_home')

@section('home_content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Contact</h2>
      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Contact</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Contact Section ======= -->
<div class="map-section">
  <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
</div>

<section id="contact" class="contact">
  <div class="container">
    <div class="row justify-content-center" data-aos="fade-up">
      <div class="col-lg-10">
        <div class="info-wrap">
          <div class="row">
            <div class="col-lg-4 info">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
              <p>{{ $contacts->address }}</p>
            </div>

            <div class="col-lg-4 info mt-4 mt-lg-0">
              <i class="icofont-envelope"></i>
              <h4>Email:</h4>
              <p>{{ $contacts->email }}</p>
            </div>

            <div class="col-lg-4 info mt-4 mt-lg-0">
              <i class="icofont-phone"></i>
              <h4>Call:</h4>
              <p>{{ $contacts->phone }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-5 justify-content-center" data-aos="fade-up">
      <div class="col-lg-10">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>

    </div>

  </div>
</section><!-- End Contact Section -->
@endsection
```
