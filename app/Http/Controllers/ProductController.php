<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use App\Models\Product;
use App\Models\Category;
use App\Models\Favorite;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /***
     *  home -> show last products and categories
     */
    public function index(){
        $categories = Category::all();
        // dd(Panier::all());
        $favorites=null;
        if(isset(Auth()->user()->id)){
            $favorites = Favorite::where('user_id',Auth()->user()->id)->get();
        }
        $products = Product::orderBy('id','desc')->paginate(12);
        return view('product.products', compact('categories','products','favorites'));
    }
    /***
     *  detail -> show details of a product
     */
    public function show(Product $product){
        $categories = Category::all();
        $favorite = Favorite::where('user_id',Auth()->user()->id)->where('product_id',$product->id)->first();
        $products = Product::where('category_id',$product->category_id)->inRandomOrder()->limit(4)->get();
        // dd($favorite);
        return view('product.show',compact('categories','product','products','favorite'));
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
