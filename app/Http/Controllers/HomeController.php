<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class HomeController extends Controller
{
    public function getHome() {
        $products = Products::All();
        return view('index', array('arrayProducts'=>$products)); 
    }
    //
    public function getContact(){
        return view('contact');
    }
}
