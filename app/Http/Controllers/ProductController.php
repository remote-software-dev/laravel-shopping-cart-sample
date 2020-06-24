<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Cart;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('welcome', compact('products'));
    }

    public function store(Request $request)
    {
        Cart::add([
            'id' => $request->id,
            'name' => $request->name,

            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => [
                'photo' => $request->photo
            ]
        ]);

        return redirect()->back();
    }

    public function showCart()
    {
        $cartCollection = Cart::getContent();
        return view('cart', compact('cartCollection'));
    }

    public function updateCart(Request $request)
    {
        Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ]
            ]
        );
        return redirect()->route('welcome')->with('success_msg', 'Cart is Updated!');
    }

    public function removeCart(Request $request)
    {
        Cart::remove($request->id);
        return redirect()->route('welcome')->with('success_msg', 'Item is removed!');
    }

    public function clearCart()
    {
        Cart::clear();
        return redirect()->route('cart')->with('success_msg', 'Cart is cleared!');
    }
}
