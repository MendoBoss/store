<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function index(){
        return 'Lister';
    }
    public function ajouter(Product $product){
        dd($product);
        return 'Ajouter';
    }    
    public function commander(){
        return 'Commander';
    }
}
