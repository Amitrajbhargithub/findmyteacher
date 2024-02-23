<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;
use App\Models\Cart;
use App\Models\Order;
use Session;
use DB;
use Illuminate\Support\Facades\Auth;

class productController extends Controller
{
    function index()
    {
        $data = Upload::all();
        return view('product',compact('data'));
    }
    function detail($id)
    {
        $data = Upload::find($id);
        return view('detail',['product'=>$data]);

    }
    public function search(Request $request)
    {
        $product = Upload::where('name','like','%'.$request->input('query').'%')->get();
        return view('search',compact('product'));
    }
    function addtocard(Request $request)
    {
        if($request->session()->has('user'))
        {
            $cart = new Cart;
            $cart->user_id = $request->session()->get('user')->id;
            $cart->product_id = $request->product_id;
            $cart->save();
            return redirect('/product');
        }
        else
        {
            return redirect('register');
        }
    }
    static function cartItem()
    {
        $userId = Session::get('user')->id;
        return Cart::where('user_id',$userId)->count();
    }
    public function cartlist()
    {
        $userId = Session::get('user')->id;
        $product=DB::table('carts')
        ->join('uploads','carts.product_id','=','uploads.id')
        ->where('carts.user_id',$userId)
        ->select('uploads.*','carts.id as cart_id')
        ->get();

        return view('cartlist',compact('product'));
    }
    public function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
    public function ordernow()
    {
        $userId = Session::get('user')->id;
        $total = $product = DB::table('carts')
        ->join('uploads','carts.product_id','=','uploads.id')
        ->where('carts.user_id',$userId)
        ->select('uploads.*','carts.id as cart_id')
        ->sum('uploads.description');
        return view('ordernow',compact('total'));
    }
    public function orderplace(Request $request)
    {
        $userId = Session::get('user')->id; 
        $allCart = Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart)
        {
            $order = new Order;
            $order->product_id = $cart->product_id;
            $order->user_id = $cart->user_id;
            $order->status = "pending";
            $order->payment_method = $request->payment;
            $order->payment_status = "pending";
            $order->address = $request->address;
            $order->save();
            Cart::where('user_id',$userId)->delete();
        }
        return redirect('product');   
    }
    public function myorders()
    {
        $userId = Session::get('user')->id;
        $orders = DB::table('orders')
        ->join('uploads','orders.product_id','=','uploads.id')
        ->where('orders.user_id',$userId)
        ->get();
         
        return view('myorders',compact('orders'));
    }
}
