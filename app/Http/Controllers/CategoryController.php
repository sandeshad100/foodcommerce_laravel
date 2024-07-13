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
}
