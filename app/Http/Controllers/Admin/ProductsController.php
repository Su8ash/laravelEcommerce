<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productList = Product::latest('id')->get();

        $tabItem = ["Admin"];

        // return $productList;

        return view('/Admin.index', [
            'productList' => $productList,
            'tabItem' => $tabItem,
        ]);
    }
    // $products = Product::latest()->get();
    // return $products;

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        // return view('admin.products.create', ['categoryList' => $categories]);
        return view('admin.products.create', compact(['categories']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $validated = $request->validate(
            [
                'name' => 'required|max:60',
                'desc' => 'required|max:400',
                'price' => 'required',
                'category_id' => 'required|integer||min:1'
            ]
        );

        // try {

        $product = new Product;

        // $product->name = $request->input('name');
        $product->name = $request->input('name');
        $product->desc =  $request->input('desc');
        $product->price =  $request->input('price');
        $product->category_id = $request->input('category');


        if ($product->save()) {
            return redirect()->route('adminProductList');
        } else {
            return redirect()->back();
        }

        // Product::create([
        //     'name' => $request->input('name'),
        //     'desc' => $request->input('desc'),
        //     'price' => $request->input('price'),
        //     'category_id' => $request->input('category'),
        // ]);
        return redirect()->route('/admin/products');
        // } catch (Exception ex) {
        //     return ex;
        //     // return redirect()->back();
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        // return $product;

        $categories = Category::all();
        return view('admin.products.edit', compact(['product', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $updated = Product::where('id', $id)
            ->update(
                [
                    'name' => $request->input('name'),
                    'desc' => $request->input('desc'),
                    'category_id' => $request->input('category'),
                    'price' => $request->input('price'),
                ]
            );


        if ($updated) {
            return redirect()->route('adminProductList');
        } else {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
