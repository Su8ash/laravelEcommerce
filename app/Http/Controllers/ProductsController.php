<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    //
    public function index()
    {
        $productList = Product::latest('id')->get();

        $tabItem = ["Subash", "Hamal", "Yes"];

        return view('home', [
            'productList' => $productList,
            'tabItem' => $tabItem,
        ]);
    }
}
