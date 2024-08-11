<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use App\Models\Panier;
use App\Models\Product;
use App\Models\Commande;
use Stripe\StripeClient;
use App\Models\CommandeItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

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
            'address'=>Auth()->user()->address,
            'cp'=>Auth()->user()->cp,
            'state'=>Auth()->user()->state,
            'country'=>Auth()->user()->country,
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
            $commande->update(['numero'=>9999,'total'=>$total+($total*0.085),]);
            $commande->save();
        }

        // vider le panier
        Panier::where('user_id',Auth()->user()->id)->delete();

        // redirection vers la fonction stripe
        $UrlPaiement = $this->stripeCheckout(round($total+($total*0.085),2),$commande->id);
        return redirect($UrlPaiement);
    }
    // commande directe
    public function one(Product $product, Request $request){
        $product=Product::find($request->product);
        // dd($product->id);
        $total=round(($product->price*$request->quantite)+(($product->price*$request->quantite)*0.085),2);
        // creation de la commande
        $commande = Commande::create([
            'user_id'=>Auth()->user()->id,
            'numero'=>0,
            'total'=>$total,
            'address'=>Auth()->user()->address,
            'cp'=>Auth()->user()->cp,
            'state'=>Auth()->user()->state,
            'country'=>Auth()->user()->country,
        ]);
        
        // ajout dans la table commande item
        CommandeItem::create([
            'commande_id'=>$commande->id,
            'product_id'=>$product->id,
            'quantite'=>$request->quantite,
            'price'=>$product->price,
        ]);
        
        // redirection vers la fonction stripe
        $UrlPaiement = $this->stripeCheckout($total,$commande->id);
        return redirect($UrlPaiement);
    }
    

    public function index(){

        $commandes = Commande::where('user_id',Auth()->user()->id)->orderBy('id','desc')->get();
        return view('commande.lister',compact('commandes'));

    }


    // ****************************************************************************
    // ********************STRIPE*************************************************
    // **************************************************************************** 

    // parametrage de l'API
    public function stripeCheckout($total,$commandeId) /* parametres */
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        /* URL de confirmation de paiement */
        $redirectUrl = route('commande.success') . '?session_id={CHECKOUT_SESSION_ID}';

        // creation de la session de paiement
        $response =  $stripe->checkout->sessions->create([
            'success_url' => $redirectUrl,
            'payment_method_types' => ['link', 'card'],
            'customer_email'=>Auth()->user()->email,
            'client_reference_id'=>$commandeId,
            'line_items' => [
                [
                    'price_data'  => [
                        'product_data' => [
                            'name' => $commandeId, /*   */
                        ],
                        'unit_amount'  => 100 * $total, /*    */
                        'currency'     => 'EUR',
                    ],
                    'quantity'    => 1
                ],
            ],
            'mode' => 'payment',
            'allow_promotion_codes' => false
        ]);


        // génération de l'url de paiement
        return $response['url'];
    }

    // route success / controle et validation du paiement
    public function success(Request $request){
        $stripe=new StripeClient(env('STRIPE_SECRET'));
        $session = $stripe->checkout->sessions->retrieve($request->session_id);
        //  status: "complete"  / client_reference_id / payment_intent ?
        if($session->status == 'complete'){
            $commande = Commande::find($session->client_reference_id);
            $commande->update(['numero'=>$session->payment_intent]);
            $commande->save();
        }
        // return redirect(route('commande.lister'));
        return view('commande.details',compact('commande'));
    }

    public function webhook(Request $resquest){
        // if($request->status == 'complete'){
        //     $commande = Commande::find($request->client_reference_id);
        //     $commande->update(['numero'=>$request->payment_intent]);
        //     $commande->save();
        // }
        return 'ok';
    }

    // afficher details d'une commande
    public function details(Commande $commande){

        return view('commande.details',compact('commande'));
    }
}
