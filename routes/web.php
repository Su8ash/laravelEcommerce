<?php

use App\Http\Controllers\ProductsController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [ProductsController::class, 'index']);

Route::get('/product-details/{productId}', function ($id) {
    return view('productDetails', [
        'product' => Product::find($id),
    ]);
});

Route::get('/category/{category}', function (Category $category) {
    // $product = Product::whereCategoryId($category->id)->get();
    $product = $category->products;
    $categories = Category::all();
    return view('shopGrid', [
        'products' => $product,
        'category' => $category,
        'categoryList' => $categories
    ]);
});



//Admin Routing

Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

Route::get('/admin/products', [App\Http\Controllers\Admin\ProductsController::class, 'index'])->name('adminProductList');

Route::get('/admin/products/create', [App\Http\Controllers\Admin\ProductsController::class, 'create'])->name('createProduct');

Route::post('/admin/products/store', [App\Http\Controllers\Admin\ProductsController::class, 'store']);

Route::get('/admin/products/edit/{product}', [App\Http\Controllers\Admin\ProductsController::class, 'edit'])->name('editProduct');

Route::post('/admin/products/update/{id}', [App\Http\Controllers\Admin\ProductsController::class, 'update']);

// Route::get('/', function () { 
//     return view('welcome');
// });

// Route::get('/products', function () {


//     $demoList = [
//         ['name' => "Product 1", 'desc' => "Description 1"],
//         ['name' => "Product 2", 'desc' => "Description 2"]
//     ];

//     $productList = Product::get();

//     return view('basics.products', [
//         'productList' => $productList
//     ],);
// });

// Route::get('/create_product', function () {
//     // Product::create([
//     //     'name' => 'Gionee A1',
//     //     'desc' => "This is description Only",
//     //     'price' => 30000,
//     //     'image' => "https://picsum.photos/200/300",
//     // ]);

//     Product::create([
//         'name' => 'New Laptop',
//         'desc' => "This is <span style='color: red'>description</span> for <strong>laptop</strong> Only",
//         'price' => 300000,
//         'image' => "https://picsum.photos/200/300",
//     ]);

//     return "Thank You";
// });

// Route::get('/get_products', function () {
//     return Product::get();
// });

// Route::get('/product/{product}', function ($id) {
//     $product = Product::find($id);
//     return view('basics.product', [
//         'product' => $product
//     ]);
// });
