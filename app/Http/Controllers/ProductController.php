<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $viewData = [];
        $viewData['title'] = "Products - Online Store";
        $viewData['products'] = Product::all();
        $viewData['subtitle'] = "List of Products";
        return view('products.index', ['viewData' => $viewData]);
    }

    public function show($id)
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData['title'] = "Product - Online Store";
        $viewData['subtitle'] = $product["name"] . " - Product information";
        $viewData['product'] = $product;
        return view('products.show', ['viewData' => $viewData]);
    }
}
