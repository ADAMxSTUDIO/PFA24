<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function storeOrder(Request $request, $product_id)
    {
        // Ensure quantity is at least 1 if not provided or invalid
        $quantity = max(1, intval($request->input('quantity', 1)));

        $product = Product::findOrFail($product_id);
        if ($product->quantity > $quantity) {
            $order = new Order();
            $order->user_id = Auth::user()->id;
            $order->product_id = $product_id;
            $order->quantity = $quantity;
            $order->save();

            $product->quantity = $product->quantity - $quantity;
            $product->save();
            if ($order) {
                return view("product.receipt", compact('order'));
            }
        }
        else{
            return back()->with('orderError', 'Sorry, The quantity desired is not supported. Comeback later!');
        }
    }
}
