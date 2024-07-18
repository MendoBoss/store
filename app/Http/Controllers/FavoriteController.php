<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    // lister les favoris
    public function index(){
        $favorites = Favorite::where('user_id',Auth()->user()->id)->get();
        // dd($favorites->user);
        return view('product.favorite',compact('favorites'));
    }
    
    // manipuler favoris
    public function ajouter(Product $product){
        $favorite = Favorite::where('user_id',Auth()->user()->id)->where('product_id',$product->id)->first();
        if(isset($favorite)){
            $favorite->delete();
        }else{
            $favorite = Favorite::create([
                'user_id' => Auth()->user()->id,
                'product_id' => $product->id,
            ]);
        }
        return back();
    }
}
