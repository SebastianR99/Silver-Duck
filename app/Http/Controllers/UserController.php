<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAccount(){
        return view('account');
    }
    //
    public function getWishlist(){
        return view('wishlist');
    }
    //
}
