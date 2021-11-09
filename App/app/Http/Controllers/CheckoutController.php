<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Page;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CheckoutController extends Controller
{
    public function checkout(Product $product ,$id)
    {
        $product = Product::find($id);


        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));


		$amount = $product->price;
        $amount *= 10;
        $amount = (int) $amount;

        $payment_intent = \Stripe\PaymentIntent::create([
			'description' => 'Stripe Test Payment',
			'amount' => $amount,
			'currency' => 'EUR',
			'description' => $product->name,
			'payment_method_types' => ['card'],
            //'customer' =>
		]);
		$intent = $payment_intent->client_secret;

		return view('checkout.credit-card',compact('intent'), [
            'product' => $product
        ]);

    }

    public function afterPayment()
    {

        //echo ('betaling goedgekeurd');

        return view('pages.shop', [
            'page'=> Page::find(6),
            'products' => Product::all()
        ])->with('Betaling gelukt', 'Bedankt voor uw betaling!');


    }

    public function form($id)
    {
        return view('checkout.form', [
            'product'=> Product::find($id)
        ]);
    }

    public function formdata($id, Request $request, Order $order)
    {
        $product = Product::find($id);
        $product_id = $product->name;
        $price = $product->price;

        $order = new Order();


        $order->name = $request->name;
        $order->street = $request->street;
        $order->postalcode = $request->postalcode;
        $order->city = $request->city;
        $order->product = $product_id;
        $order->price = $price;
        $order->product_id = $product->id;
        $order->email = $request->email;


        $order->save();

        return redirect('checkout/' . $id);
    }
}
