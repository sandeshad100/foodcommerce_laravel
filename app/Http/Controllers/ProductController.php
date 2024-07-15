<?php

namespace App\Http\Controllers;

use App\Models\Product;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Request $request, Response $response)
    {
        $products = DB::table('product')->join('categories', 'product.category_id', '=', 'categories.id')->get();
        //  dd($categories);

        return view('admin.product.product', compact('products'));
    }
    public function add(Request $request, Response $response)
    {
        $categories = DB::table('categories')->orderBy('created_at', 'desc')->get();
        //  dd($categories);
        return view('admin.product.product_add', compact('categories'));
    }
    public function store(Request $request, Response $response){

        $request->validate([
            'product_name' => 'required',
            'product_rate' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            // 'file' => 'required|mimes:jpg,png,gif'
        ]);

        $product = new Product();
        $product->product_name = $request->product_name;
        $product->product_rate = $request->product_rate;
        $product->description = $request->description;
        $product->category_id = $request->category_id;

        // $filename = time() . '_' . $file->getClientOrginalName();
        $product->save();

        return redirect()->route('product')->with('success', 'Product added successfully.');
    }
}
