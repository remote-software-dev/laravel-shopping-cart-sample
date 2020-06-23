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
}
