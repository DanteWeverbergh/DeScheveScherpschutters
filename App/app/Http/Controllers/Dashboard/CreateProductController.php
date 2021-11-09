<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CreateProductController extends Controller
{
    public function index()
    {
        return view('dashboard.createproduct');
    }

    public function newProduct(Request $r, Product $product)
    {
        $new = new Product();

        $price = $r->price;
        $price = $price*10;


        $new->name = $r->name;
        $new->price = $price;
        $new->description = $r->description;

        $new->save();

        return redirect('/dashboard');

    }

    public function editView($id)
    {
        return view('dashboard.editproduct', [
            'product' => Product::find($id)
        ]);
    }

    public function editProduct($id, Request $request, Product $product)
    {
        $product = Product::find($id);

        $price = $request->price;
        $price = $price*10;

        $product->name = $request->name;
        $product->price = $price;
        $product->description = $request->description;

        $product->save();


        return redirect('/dashboard');
    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('/dashboard');
    }
}
