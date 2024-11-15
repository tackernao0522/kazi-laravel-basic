<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function allCat()
    {
        // $categories = DB::table('categories')
        //     ->join('users', 'categories.user_id', 'users.id')
        //     ->select('categories.*', 'users.name')
        //     ->latest()->paginate(5);

        $categories = Category::latest()->paginate(5);
        $trashCat = Category::onlyTrashed()->latest()->paginate(3);
        // $categories = DB::table('categories')->latest()->paginate(5);

        return view('admin.category.index')
            ->with('categories', $categories)
            ->with('trashCat', $trashCat);
    }

    public function addCat(Request $request)
    {
        $validatedData = $request->validate(
            [
                'category_name' => 'required|unique:categories|max:255',
            ],
            [
                'category_name.required' => 'Please Input Category Name',
                'category_name.max' => 'Category Less Then 255Chars',
            ]
        );

        Category::insert([
            'category_name' => $request->category_name,
            'user_id' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ]);

        // $category = new Category;
        // $category->category_name = $request->category_name;
        // $category->user_id = Auth::user()->id;
        // $category->save();

        // $data = array();
        // $data['category_name'] = $request->category_name;
        // $data['user_id'] = Auth::user()->id;
        // DB::table('categories')->insert($data);

        return redirect()->back()->with('success', 'Category Inserted Successfull');
    }

    public function edit($id)
    {
        // $category = Category::find($id);
        $category = DB::table('categories')->where('id', $id)->first();

        return view('admin.category.edit')->with('category', $category);
    }

    public function update(Request $request, $id)
    {
        // $update = Category::find($id)->update([
        //     'category_name' => $request->category_name,
        //     'user_id' => Auth::user()->id,
        // ]);

        $data = array();
        $data['category_name'] = $request->category_name;
        $data['user_id'] = Auth::user()->id;
        DB::table('categories')->where('id', $id)->update($data);

        return redirect()
            ->route('all.category')
            ->with('success', 'Category Updated Successfull');
    }

    public function softDelete($id)
    {
        $delete = Category::find($id)->delete();

        return redirect()->back()->with('success', 'Category Soft Delete Successfully');
    }

    public function restore($id)
    {
        $delete = Category::withTrashed()->find($id)->restore();

        return redirect()->back()->with('success', 'Category Restore Successfully');
    }

    public function pDelete($id)
    {
        $pDelete = Category::onlyTrashed()->find($id)->forceDelete();

        return redirect()->back()->with('success', 'Category Parmanently Deleted');
    }
}
