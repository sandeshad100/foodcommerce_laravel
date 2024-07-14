<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $category = new Category();
        $category->category_name = $request->name;

        $category->save();
        $categories = DB::table('categories')->get();
        return redirect()->route('category.show')->with('categories', $categories);
    }


    public function show(Request $request)
    {
        $categories = DB::table('categories')->orderBy('created_at', 'desc')->get();
        //  dd($categories);
        return view('admin.category', compact('categories'));
    }

    public function edit($id){
        $category = DB::table('categories')->find($id);
        return view('admin.category_update', compact('category'));
    }
    public function update(Request $request, $id){
        $request->validate([
            "name" => 'required'
        ]);

        // $category = DB::table('categories')->find($id);
        $category = Category::find($id);
        if ($category) {
            $category->category_name = $request->name;
            $category->save();
        }
        // $category->name = $request->name;

        // $category->save();
        return redirect()->route('category.show');
    }

    public function delete($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return redirect()->back()->with('error', 'category not found');
        }
        $category->delete();
        return back();
    }

}
