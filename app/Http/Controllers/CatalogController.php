<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\New_;

class CatalogController extends Controller
{
    public function getProduct()
    {
        $identificacion = Auth::id();
        $car = DB::table('carts')->where('cart_user',$identificacion)
                                 ->where('cart_bought',false)->count();
        $products = Products::All();
        return view('product', array('arrayProducts'=>$products),array('car'=>$car));
    }
    //
    public function getProductMen()
    {
        $identificacion = Auth::id();
        $car = DB::table('carts')->where('cart_user',$identificacion)
                                 ->where('cart_bought',false)->count();
        $products = Products::where('product_genre', 'male')
                            ->get();
        return view('Men.product-men', array('arrayProducts'=>$products),array('car'=>$car));
    }
    //
    public function getProductMenCasual()
    {
        $identificacion = Auth::id();
        $car = DB::table('carts')->where('cart_user',$identificacion)
                                 ->where('cart_bought',false)->count();
        $products = Products::where('product_genre', 'male')
                            ->where('product_type', 'casual')
                            ->get();
        return view('Men.product-men-casual', array('arrayProducts'=>$products),array('car'=>$car));
    }
    //
    public function getProductMenSport()
    {
        $identificacion = Auth::id();
        $car = DB::table('carts')->where('cart_user',$identificacion)
                                 ->where('cart_bought',false)->count();
        $products = Products::where('product_genre','male')
                            ->where('product_type','sport')
                            ->get();
        return view('Men.product-men-sport', array('arrayProducts'=>$products),array('car'=>$car));
    }
    //
    public function getProductMenFormal()
    {
        $identificacion = Auth::id();
        $car = DB::table('carts')->where('cart_user',$identificacion)
                                 ->where('cart_bought',false)->count();
        $products = Products::where('product_genre','male')
                            ->where('product_type', 'formal')
                            ->get();
        return view('Men.product-men-formal', array('arrayProducts'=>$products),array('car'=>$car));
    }
    //
    public function getProductWomen()
    {
        $identificacion = Auth::id();
        $car = DB::table('carts')->where('cart_user',$identificacion)
                                 ->where('cart_bought',false)->count();
        $products = Products::where('product_genre', 'female')
                            ->get();
        return view('Women.product-women', array('arrayProducts'=>$products),array('car'=>$car));
    }
    //
    public function getProductWomenCasual()
    {
        $identificacion = Auth::id();
        $car = DB::table('carts')->where('cart_user',$identificacion)
                                 ->where('cart_bought',false)->count();
        $products = Products::where('product_genre', 'female')
                            ->where('product_type', 'casual')
                            ->get();
        return view('Women.product-women-casual', array('arrayProducts'=>$products),array('car'=>$car));
    }
    //
    public function getProductWomenSport()
    {
        $identificacion = Auth::id();
        $car = DB::table('carts')->where('cart_user',$identificacion)
                                 ->where('cart_bought',false)->count();
        $products = Products::where('product_genre', 'female')
                            ->where('product_type', 'sport')
                            ->get();
        return view('Women.product-women-sport', array('arrayProducts'=>$products),array('car'=>$car));
    }
    //
    public function getProductWomenFormal()
    {
        $identificacion = Auth::id();
        $car = DB::table('carts')->where('cart_user',$identificacion)
                                 ->where('cart_bought',false)->count();
        $products = Products::where('product_genre', 'female')
                            ->where('product_type', 'formal')
                            ->get();
        return view('Women.product-women-formal', array('arrayProducts'=>$products),array('car'=>$car));
    }
    //
    
    //
    public function getDetail($product_id)
    {
        
        $product = Products::where('product_id', $product_id)
                           ->first();
        $genre = $product->product_genre;
        $category = $product->product_type;
        $similars = Products::where('product_genre', $genre)
                           ->where('product_type', $category)
                           ->where('product_id', '!=', $product_id)
                           ->take(4)
                           ->get();
        return view('product-detail',array('product'=>$product), array('arraySimilars'=>$similars));
    }
    //
    public function getCart()
    {
        $identificacion = Auth::id();
        $car = DB::table('carts')->where('cart_user',$identificacion)
                                 ->where('cart_bought',false)->count();
        $usuario = Auth::id();
        $products = DB::table('carts')->join('users','carts.cart_user','=','users.id')
                                      ->join('products','carts.cart_product','=','products.product_id')
                                      ->select('products.*')
                                      ->where('carts.cart_user',$usuario)
                                      ->where('carts.cart_bought',false)
                                      ->get();
        return view('cart', array('arrayProducts'=>$products),array('car'=>$car));
        
    }
    //
    public function getCheckout(){
        $identificacion = Auth::id();
        $pago = DB::table('carts')->join('users','carts.cart_user','=','users.id')
                                  ->join('products','carts.cart_product','=','products.product_id')
                                  ->select('products.*','users.*')
                                  ->where('carts.cart_user',$identificacion)
                                  ->where('carts.cart_bought',false)
                                  ->get();

        $subtotal = 0;
        foreach($pago as $ciclo)
        {
            $subtotal+=intval($ciclo->product_price);
        }
        $iva = intval($subtotal*0.19);
        $total=intval($iva+$subtotal);
        
        return view('checkout',array('arrayPago'=>$pago),array(
            'subtotal'=>$subtotal,
            'iva'=>$iva,
            'total'=>$total
        ));
    }

    public function getHomeno()
    {
        $identificacion = Auth::id();
        $car = DB::table('carts')->where('cart_user',$identificacion)
                                 ->where('cart_bought',false)->count();
        $products = Products::All();
        return view('no.indexno', array('arrayProducts'=>$products),array('car'=>$car));
    }
    
    public function loginNo()
    {
       return back()->with(['error'=>'Para utilizar esta función, por favor inicie sesión']);
    }
     
    public function addProduct(Request $request)
    {
        if(Auth::check())
        {
            $usuario = Auth::id();
            $carrito = New Cart();
            $carrito->cart_user = $usuario;
            $carrito->cart_product = $request->product;
            $carrito->save();
            return back();
        }
        else
        {
           return redirect('/login-no');
        }
    }

    public function deleteProduct(Request $request)
    {
        $producto = $request->product;
        DB::table('carts')->where('cart_product',$producto)->delete();
        return back()->with('success','Su pedido ha sido realizado con éxito   :3');
    }

    public function postCheckout(Request $request)
    {
        $identificacion=Auth::id();
        $productos=DB::table('carts')->join('users','carts.cart_user','=','users.id')
                                     ->join('products','carts.cart_product','=','products.product_id')
                                     ->select('products.*','users.*')
                                     ->where('carts.cart_user',$identificacion)
                                     ->where('carts.cart_bought',false)
                                     ->get();
        foreach($productos as $product)
        {
            $stock = $product->product_stock;

            if($product->product_stock > 0)
            {
                $stock -= 1;
                DB::table('products')->where('product_id',$product->product_id)
                                     ->update(['product_stock'=>$stock]);
            }
            else
            {
                return back()->with('error','Producto no disponible');
            }
        }
        DB::table('carts')->where('cart_user',$identificacion)
        ->update(['cart_bought'=>true]);
        return redirect( url('/account') )->with('success','Su pedido ha sido realizado con éxito   :3');
    }

    public function productSearch(Request $request)
    {
        $identificacion = Auth::id();
        $car = DB::table('carts')->where('cart_user',$identificacion)
                                 ->where('cart_bought',false)->count();
        $busqueda=strtolower($request->busqueda);
        $products=Products::whereRaw('lower(product_name) like (?)',["%{$busqueda}%"])->get();
        return view('search-product',array('arrayProducts'=>$products),array('car'=>$car));

    }
}
