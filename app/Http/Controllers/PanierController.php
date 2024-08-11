<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use App\Models\Product;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function index(){
        $panier=Panier::where('user_id',Auth()->user()->id)->get();
        // dd($panier);

        return view('panier.lister',compact('panier'));
    }
    public function ajouter(Request $request,Product $product){
        // dd($request->quantite2);
        // dd(Auth()->user()->id);
        // search product in user card
        $existProduct = Panier::where('user_id',Auth()->user()->id)->where('product_id',$product->id)->first();
        // if product exist update quantities
        // if($existProduct->count()>0){
        if(isset($existProduct)){
            // mise a jour du produit else add product
            // Panier::where('id',$existProduct[0]->id)->update(['quantite'=>$existProduct[0]->quantite+1]);
            // Panier::where('product_id',$product->id)->where('user_id',Auth()->user()->id)->update(['quantite'=>$existProduct[0]->quantite+1]);
            $existProduct->quantite = $existProduct->quantite + $request->quantite2;
            $existProduct->save();
        }else{
            // dd($product->id);
            // ajout du produit
            Panier::create([
                'user_id'=>Auth()->user()->id,
                'product_id'=>$product->id,
                'quantite'=>$request->quantite2,
            ]);
        }
        return redirect()->route('panier.lister');
    }

    public function remove(Panier $panier){
        $panier->delete();
        return back();
    }

    public function moins(Panier $panier){
        if($panier->quantite == 1){
            $panier->delete();
        }else{
            $panier->quantite = $panier->quantite-1;
            $panier->save();
        }

        return back();
    }
    public function commander(){
        return 'Commander';
    }
}
