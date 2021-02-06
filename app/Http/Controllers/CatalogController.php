<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class CatalogController extends Controller
{
    public function getProductMen(){
        $products = Products::All();
        return view('Men.product-men', array('arrayProducts'=>$products));
    }
    //
    public function getProductMenCasual(){
        return view('Men.product-men-casual');
    }
    //
    public function getProductMenSport(){
        return view('Men.product-men-sport');
    }
    //
    public function getProductMenFormal(){
        return view('Men.product-men-formal');
    }
    //
    public function getProductWomen(){
        return view('Women.product-women');
    }
    //
    public function getProductWomenCasual(){
        return view('Women.product-women-casual');
    }
    //
    public function getProductWomenSport(){
        return view('Women.product-women-sport');
    }
    //
    public function getProductWomenFormal(){
        return view('Women.product-women-formal');
    }
}
