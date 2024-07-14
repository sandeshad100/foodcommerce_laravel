<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $products = DB::table('product')->join('categories', 'product.category_id', '=', 'categories.id')->get();
        //  dd($categories);

        return view('user.home', compact('products'));
    }
}
