<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class CatalogController extends Controller
{
    public function getProduct(){
        $products = Products::All();
        return view('product', array('arrayProducts'=>$products));
    }
    //
    public function getProductMen(){
        $products = Products::where('product_genre', 'male')
                            ->get();
        return view('Men.product-men', array('arrayProducts'=>$products));
    }
    //
    public function getProductMenCasual(){
        $products = Products::where('product_genre', 'male')
                            ->where('product_type', 'casual')
                            ->get();
        return view('Men.product-men-casual', array('arrayProducts'=>$products));
    }
    //
    public function getProductMenSport(){
        $products = Products::where('product_genre','male')
                            ->where('product_type','sport')
                            ->get();
        return view('Men.product-men-sport', array('arrayProducts'=>$products));
    }
    //
    public function getProductMenFormal(){
        $products = Products::where('product_genre','male')
                            ->where('product_type', 'formal')
                            ->get();
        return view('Men.product-men-formal', array('arrayProducts'=>$products));
    }
    //
    public function getProductWomen(){
        $products = Products::where('product_genre', 'female')
                            ->get();
        return view('Women.product-women', array('arrayProducts'=>$products));
    }
    //
    public function getProductWomenCasual(){
        $products = Products::where('product_genre', 'female')
                            ->where('product_type', 'casual')
                            ->get();
        return view('Women.product-women-casual', array('arrayProducts'=>$products));
    }
    //
    public function getProductWomenSport(){
        $products = Products::where('product_genre', 'female')
                            ->where('product_type', 'sport')
                            ->get();
        return view('Women.product-women-sport', array('arrayProducts'=>$products));
    }
    //
    public function getProductWomenFormal(){
        $products = Products::where('product_genre', 'female')
                            ->where('product_type', 'formal')
                            ->get();
        return view('Women.product-women-formal', array('arrayProducts'=>$products));
    }
    //
    public function getCart(){
        //$products = Products::All();
        return view('cart'/*, array('arrayProducts'=>$products)*/);
    }
    //
    public function getCheckout(){
        //$products = Products::All();
        return view('checkout'/*, array('arrayProducts'=>$products)*/);
    }
}
