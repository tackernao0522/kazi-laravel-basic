## Setup Home page About Section Part1

+ `$ php artisan make:model HomeAbout -m`を実行<br>

+ `create_home_abouts_table.php`を編集<br>

```
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeAboutsTalbe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('short_dis');
            $table->text('long_dis');
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
        Schema::dropIfExists('home_abouts');
    }
}
```

+ `$ php artisan migrate`を実行<br>

+ `$ php artisan make:controller AboutController`を作成<br>

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

// Home Abut All Route
Route::get('/home/about', [AboutController::class, 'homeAbout'])->name('home.about');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // $users = User::all();
    // $users = DB::table('users')->get();

    return view('admin.index');
})->name('dashboard');

Route::get('/user/logout', [BrandController::class, 'logout'])->name('user.logout');
```

+ `resources/views/admin/home`ディレクトリを作成<br>

+ `resources/views/admin/home/index.blade.php`ファイルを作成<br>

+ `AboutController`を編集<br>

```
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
```

+ `resources/views/admin/home/index.blade.php`を編集<br>

```
@extends('admin.admin_master')

@section('admin')
<div class="py-12">
  <div class="container">
    <div class="row">
      <h4>Home About</h4>
      <a href=""><button class="btn btn-info">Add About</button></a>
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

          <div class="card-header">All About Data</div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col" width="5%">SL</th>
                <th scope="col" width="15%">Home Title</th>
                <th scope="col" width="25%">Short Description</th>
                <th scope="col" width="15%">Long Description</th>
                <th scope="col" width="15%">Action</th>
              </tr>
            </thead>
            <tbody>
              @php ($i = 1)
              @foreach($home_abouts as $about)
              <tr>
                <th scope="row">{{ $i++ }}</th>
                <td>{{ $about->title }}</td>
                <td>{{ $about->short_dis }}</td>
                <td>{{ $abut->long_dis }}</td>
                <td>
                  <a href="{{ url('about/edit/'. $about->id) }}" class="btn btn-info">Edit</a>
                  <a href="{{ url('about/delete/' . $about->id) }}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>
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

## Setup Home Page About Section Part2

+ `resurces/views/admin/home/index.blade.php`を編集<br>

```
@extends('admin.admin_master')

@section('admin')
<div class="py-12">
  <div class="container">
    <div class="row">
      <h4>Home About</h4>
      <a href="{{ route('add.about') }}"><button class="btn btn-info">Add About</button></a> // 編集
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

          <div class="card-header">All About Data</div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col" width="5%">SL</th>
                <th scope="col" width="15%">Home Title</th>
                <th scope="col" width="25%">Short Description</th>
                <th scope="col" width="15%">Long Description</th>
                <th scope="col" width="15%">Action</th>
              </tr>
            </thead>
            <tbody>
              @php ($i = 1)
              @foreach($home_abouts as $about)
              <tr>
                <th scope="row">{{ $i++ }}</th>
                <td>{{ $about->title }}</td>
                <td>{{ $about->short_dis }}</td>
                <td>{{ $about->long_dis }}</td>
                <td>
                  <a href="{{ url('about/edit/'. $about->id) }}" class="btn btn-info">Edit</a>
                  <a href="{{ url('about/delete/' . $about->id) }}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>
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

// Home Abut All Route
Route::get('/home/about', [AboutController::class, 'homeAbout'])->name('home.about');
Route::get('/add/about', [AboutController::class, 'addAbout'])->name('add.about'); // 追記

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // $users = User::all();
    // $users = DB::table('users')->get();

    return view('admin.index');
})->name('dashboard');

Route::get('/user/logout', [BrandController::class, 'logout'])->name('user.logout');
```

+ `AboutController.php`を編集<br>

```
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

    public function addAbout()
    {
        return view('admin.home.create');
    }
}
```

+ `resources/views/admin/home/create.blade.php`ファイルを作成<br>

```
@extends('admin.admin_master')

@section('admin')
<div class="col-lg-12">
  <div class="card card-default">
    <div class="card-header card-header-border-bottom">
      <h2>Create Home About</h2>
    </div>
    <div class="card-body">
      <form action="{{ route('store.about') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">About Title</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="{{ old('title') }}" placeholder="About Title">
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Short Description</label>
          <textarea class="form-control" name="short_dis" id="exampleFormControlTextarea1" rows="3">{{ old('short_dis') }}</textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Long Description</label>
          <textarea class="form-control" name="long_dis" id="exampleFormControlTextarea1" rows="3">{{ old('long_dis') }}</textarea>
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

// Home Abut All Route
Route::get('/home/about', [AboutController::class, 'homeAbout'])->name('home.about');
Route::get('/add/about', [AboutController::class, 'addAbout'])->name('add.about');
Route::post('/store/about', [AboutController::class, 'storeAbout'])->name('store.about');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // $users = User::all();
    // $users = DB::table('users')->get();

    return view('admin.index');
})->name('dashboard');

Route::get('/user/logout', [BrandController::class, 'logout'])->name('user.logout');
```

+ `AboutController.php`を編集<br>

```
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

        return redirect()->route('home.about')->with('sucess', 'About Inserted Succsessfully');
    }
}
```

## Setup Home Page About Section Part3

`web.php`を編集<br>

```
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
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

// Home Abut All Route
Route::get('/home/about', [AboutController::class, 'homeAbout'])->name('home.about');
Route::get('/add/about', [AboutController::class, 'addAbout'])->name('add.about');
Route::post('/store/about', [AboutController::class, 'storeAbout'])->name('store.about');
Route::get('/about/edit/{id}', [AboutController::class, 'editAbout']); // 追記

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // $users = User::all();
    // $users = DB::table('users')->get();

    return view('admin.index');
})->name('dashboard');

Route::get('/user/logout', [BrandController::class, 'logout'])->name('user.logout');
```

+ `AboutController.php`を編集<br>

```
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

    public function editAbout($id)
    {
        $home_about = HomeAbout::find($id);

        return view('admin.home.edit')->with('home_about', $home_about);
    }
}
```

+ `resources/views/home/edit.blade.php`ファイルを作成<br>

```
@extends('admin.admin_master')

@section('admin')
<div class="col-lg-12">
  <div class="card card-default">
    <div class="card-header card-header-border-bottom">
      <h2>Edit Home About</h2>
    </div>
    <div class="card-body">
      <form action="{{ url('update/home_about/' . $home_about->id) }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">About Title</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value="{{ old('title', $home_about->title) }}">
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Short Description</label>
          <textarea class="form-control" name="short_dis" id="exampleFormControlTextarea1" rows="3">{{ old('short_dis', $home_about->short_dis) }}</textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlFile1">Long Description</label>
          <textarea class="form-control" name="long_dis" id="exampleFormControlTextarea1" rows="3">{{ old('long_dis', $home_about->long_dis) }}</textarea>
        </div>
        <div class="form-footer pt-4 pt-5 mt-4 border-top">
          <button type="submit" class="btn btn-primary btn-default">Update</button>
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

// Home Abut All Route
Route::get('/home/about', [AboutController::class, 'homeAbout'])->name('home.about');
Route::get('/add/about', [AboutController::class, 'addAbout'])->name('add.about');
Route::post('/store/about', [AboutController::class, 'storeAbout'])->name('store.about');
Route::get('/about/edit/{id}', [AboutController::class, 'editAbout']);
Route::post('/update/home_about/{id}', [AboutController::class, 'updateAbout']); // 追記

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // $users = User::all();
    // $users = DB::table('users')->get();

    return view('admin.index');
})->name('dashboard');

Route::get('/user/logout', [BrandController::class, 'logout'])->name('user.logout');
```

+ `AboutController.php`を編集<br>

```
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
}
```
