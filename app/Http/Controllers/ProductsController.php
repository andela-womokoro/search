<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
   public function newProductForm()
   {
        return view('product_new');
   }

   public function newProduct(Request $request)
   {
        $product = new Product();
        $product->name = $request->input('name');
        $product->category = $request->input('category');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->save();

        $alert = 'Product successfully added.';

        return view('product_new', ['alert' => $alert]);
   }
}
