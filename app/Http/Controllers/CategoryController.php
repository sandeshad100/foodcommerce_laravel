<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


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
        return back();
    }
}
