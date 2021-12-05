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


