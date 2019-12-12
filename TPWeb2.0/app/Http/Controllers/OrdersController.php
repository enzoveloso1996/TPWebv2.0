<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrdersController extends Controller
{
    public function index()
    {
       return view('mycart');
    }
    public function cart()
    {
        $orders = Order::where('status','=','For approval')->get();
        return view('mycart')->with('orders', $orders);
    }
    public function create()
    {
       return view('order');
    }
    public function store(Request $request)
    {
       $products = new Order;
       $products->size = $request->input('size');
       $products->price = $request->input('price');
       $products->user_id = $request->input('user_id');
       $products->product = $request->input('product');
       $products->quantity = $request->input('quantity');
       $products->instructions = $request->input('instructions');
       $products->save();

       return redirect('/home');
    }
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect('mycart');
    }
}
