<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Products - Online Store";
        $viewData["products"] = Product::all();
        return view('admin.product.index', ["viewData" => $viewData]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric|gt:0',
            'description' => 'required',
            'image' => 'image',
        ]);

        $newProduct = new Product();
        $newProduct['name'] = $request->input('name');
        $newProduct['price'] = $request->input('price');
        $newProduct['description'] = $request->input('description');



        if ($request->hasFile('image')) {
            $imageName = $newProduct['id'] . "." . $request->file('image')->extension();
            Storage::disk("public")->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $newProduct['image'] = $imageName;
            $newProduct->save();
        } else {
            $newProduct['image'] = "safe.png";
            $newProduct->save();
        }


        return back();
    }

    public function delete($id)
    {
        Product::destroy($id);
        return back();
    }

    public function edit($id)
    {
        $viewData = [];
        $viewData["title"] = "Admin Page - Products - Online Store";
        $viewData['product'] = Product::findOrFail($id);
        return view('admin.product.edit', ["viewData" => $viewData]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric|gt:0',
            'description' => 'required',
            'image' => 'image',
        ]);

        $product = Product::findOrFail($id);
        $product['name'] = $request->input('name');
        $product['price'] = $request->input('price');
        $product['description'] = $request->input('description');

        if ($request->hasFile('image')) {
            $imageName = $product['id'] . "." . $request->file('image')->extension();
            Storage::disk("public")->put(
                $imageName,
                file_get_contents($request->file('image')->getRealPath())
            );
            $product['image'] = $imageName;
            $product->save();
        } else {
            $product['image'] = "safe.png";
            $product->save();
        }

        return Redirect::route('admin.product.index');
    }
}
