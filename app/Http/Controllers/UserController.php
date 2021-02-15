<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Products;

use Illuminate\Http\Request;

class UserController extends Controller
{
     public function getWishlist(){
        return view('wishlist');
    }
    //
    public function getAccount(){
        $user = User::All();
        return view('user',array('user'=>$user));
    }
    //
    public function getForm(){

        return view('user-form');
    }
    //
    public function postForm(Request $request){
        
        $identificacion = 1;
        $depto = $request->depto;
        $ciudad = $request->ciudad;
        $direccion = $request->direccion;
        $telefono = $request->telefono;

       $user = DB::table('users')->where('id',$identificacion)
                ->update(['user_dpto'=>$depto],['user_city'=>$ciudad],
                        ['user_address'=>$direccion],['user_phone'=>$telefono]);

        return redirect(url ('/account') );
    }
    //

}
