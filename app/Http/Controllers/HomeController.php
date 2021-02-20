<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Products;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function getHome() 
    {
        $identificacion = Auth::id();
        $car = DB::table('carts')->where('cart_user',$identificacion)
                                 ->where('cart_bought',false)->count();
        $products = Products::All();
        return view('index', array('arrayProducts'=>$products),array('car'=>$car)); 
    }
    //
  
}
