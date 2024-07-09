<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /***
     *  home -> show last products and categories
     */
    public function index(){
        $categories = Category::all();
        // dd($categories);
        $products = Product::orderBy('id','desc')->paginate(10);
        return view('product.products', compact('categories','products'));
    }
     /***
     *  detail -> show details of a product
     */
    public function show($id){
        return view('product.show');
    }
     /***
     *  byCat -> show products by categories
     */
    public function productByCategory($id){
        return 'cat'.+$id;
    }
}
