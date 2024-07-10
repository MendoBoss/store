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
        $products = Product::orderBy('id','desc')->paginate(12);
        return view('product.products', compact('categories','products'));
    }
    /***
     *  detail -> show details of a product
     */
    public function show(Product $product){
        $categories = Category::all();
        $products = Product::where('category_id',$product->category_id)->inRandomOrder()->limit(4)->get();
        // dd($products);
        return view('product.show',compact('categories','product','products'));
    }
    /***
     *  byCat -> show products by categories
     */
    public function productByCategory($id){
        $categories = Category::all();
        $cat=Category::find($id);
        $products = Product::where('category_id',$id)->orderBy('id','desc')->paginate(12);
        return view('product.products', compact('categories','products','cat'));
    }
}
