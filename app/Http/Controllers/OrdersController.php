<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function store(Request $request, Product $product){

        $this->validate(request(), [
    		'name' => 'required',
            'movil'=>'required',
            'email'=>'required',
            'message'=>'required',
            'g-recaptcha-response' => 'required|captcha'
    	]);

        Order::create([
            'name' => $request->name,
            'movil'=>$request->movil,
            'email'=>$request->email,
            'message'=>$request->message,
            'product_id'=>$product->id
        ]);

        return back()->with('flash', 'Pedido Enviado, gracias por Contactar');

    }


}
