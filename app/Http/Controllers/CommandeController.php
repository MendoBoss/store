<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use App\Models\Commande;
use App\Models\CommandeItem;
use Illuminate\Http\Request;

class CommandeController extends Controller
{

    // creation de la commande et ajout des élements du panier dans commande items
    public function create(){
        // lecture du panier
        $panier = Panier::where('user_id',Auth()->user()->id)->get();
        
        // condition si le panier est vide
        if(count($panier) == 0){return back();}

        // creation de la commande
        $commande = Commande::create([
            'user_id'=>Auth()->user()->id,
            'numero'=>0,
            'total'=>0,
        ]);
        $total=0;

        foreach($panier as $rowPanier){
            $commandeId = $commande->id;  // identifiant de la commande 
            $productId = $rowPanier->product_id; // identifiant du produit
            $quantite = $rowPanier->quantite; // nombre de produit
            $price = $rowPanier->product->price; // prix unitaire du produit

            // ajout dans la table commande item
            CommandeItem::create([
                'commande_id'=>$commandeId,
                'product_id'=>$productId,
                'quantite'=>$quantite,
                'price'=>$price,
            ]);

            // calcul du total
            $total = $total+($price*$quantite);

            // mise a jour du total de la commande 
            $commande->update(['numero'=>9999,'total'=>$total,]);
            $commande->save();
        }

        // vider le panier
        Panier::where('user_id',Auth()->user()->id)->delete();

        return back();
    }

    public function index(){

        $commandes = Commande::where('user_id',Auth()->user()->id)->orderBy('id','desc')->get();
        return view('commande.lister',compact('commandes'));

    }
}
