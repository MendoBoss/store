<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /***
     *  home -> show last products and categories
     */
    public function index(){
        return 'home';
    }
     /***
     *  detail -> show details of a product
     */
    public function show($id){
        return 'detail'.+$id;
    }
     /***
     *  byCat -> show products by categories
     */
    public function productByCategory($id){
        return 'cat'.+$id;
    }
}
