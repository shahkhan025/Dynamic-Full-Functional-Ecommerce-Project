<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    private $product;
    private $cartProduct;

    public function index(Request $request, $id)
    {
        $this->product = Product::find($id);

        Cart::add([
            'id' => $this->product->id,
            'name' => $this->product->name,
            'price' => $this->product->selling_price,
            'quantity' => $request->qty,
            'attributes' => [
                'image' => $this->product->image,

            ]
        ]);
        return redirect('/show-cart-product');

    }

    public function show()
    {
        $this->cartProduct = Cart::getContent();
        return view('front.cart.show',['products' => $this->cartProduct]);
    }

    public function update(Request $request, $id)
    {
         Cart::update($id, [
            'quantity' => [
                'relative' => false,
                'value' => $request->qty,
            ],
        ]);
        return redirect('/show-cart-product')->with('message', 'Cart Quantity Update Successfully');
    }

    public function delete($id)
    {
        Cart::remove($id);
        return redirect('/show-cart-product')->with('message', 'Cart Product Removed Successfully');
    }
}
