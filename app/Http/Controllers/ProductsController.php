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
        $name = $request->input('name');
        $category = $request->input('category');
        $description = $request->input('description');
        $price = $request->input('price');
        $alert = "";

        if(is_null($name) || is_null($category) || is_null($description) || is_null($price)) {
            $alert = 'Missing field. Please fill in all fields.';
        } else if($name == "" || $category == "" || $description == "" || $price == "") {
            $alert = 'Empty field. Please fill in all fields.';
        } else {
            $product = new Product();
            $product->name = $name;
            $product->category = $category;
            $product->description = $description;
            $product->price = $price;
            $product->save();
            $alert = 'Product successfully added.';
        }

        return view('product_new', ['alert' => $alert]);
   }

   public function searchProductForm()
   {
       return view('product_search'); 
   }

   public function search(Request $request)
   {
        $searchPhrase = $request->input('phrase');
        $products = Product::where('name', 'ilike', "%$searchPhrase%")->paginate(4);;

        //if no result, try searching for category instead...
        if ($products->count() <= 0) {
            $products = Product::where('category', 'ilike', "%$searchPhrase%")->paginate(4);;
        }

        return view('product_search', ['products'=>$products]);
   }
}
