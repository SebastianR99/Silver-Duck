<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Products;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getContact()
    {
        $identificacion = Auth::id();
        $car = DB::table('carts')->where('cart_user',$identificacion)
                                 ->where('cart_bought',false)->count();
        return view('contact',array('car'=>$car));
    }
    //
     public function getWishlist(){
        return view('wishlist');
    }
    //
    public function getAccount()
    {
        $identificacion = Auth::id();
        $car = DB::table('carts')->where('cart_user',$identificacion)
                                 ->where('cart_bought',false)->count();
        $user = DB::table('users')->find($identificacion);
        return view('user',array('user'=>$user),array('car'=>$car));
    }
    //
    public function getForm()
    {
        $identificacion = Auth::id();
        $car = DB::table('carts')->where('cart_user',$identificacion)
                                 ->where('cart_bought',false)->count();
        return view('user-form',array('car'=>$car));
    }
    //
    public function postForm(Request $request)
    { 
        $identificacion = Auth::id();
        $nombres = $request->names;
        $apellidos = $request->lastnames;
        $depto = $request->depto;
        $ciudad = $request->ciudad;
        $direccion = $request->direccion;
        $telefono = $request->telefono;

        if($nombres != null)
        {
            DB::table('users')->where('id',$identificacion)
                ->update(['full_name'=>$nombres]);
        }

        if($apellidos != null)
        {
            DB::table('users')->where('id',$identificacion)
                ->update(['full_lastname'=>$apellidos]);
        }

        if($depto != null)
        {
            DB::table('users')->where('id',$identificacion)
                ->update(['user_dpto'=>$depto]);
        }
    
        if($ciudad != null)
        {
            DB::table('users')->where('id',$identificacion)
                ->update(['user_city'=>$ciudad]);
        }

        if($direccion != null)
        {
            DB::table('users')->where('id',$identificacion)
                ->update(['user_address'=>$direccion]);
        }

        if($telefono != null)
        {
            DB::table('users')->where('id',$identificacion)
                ->update(['user_phone'=>$telefono]);
        }

        return redirect(url ('/account') )->with('success','Datos actualizados  :3');
    }
    //

}
