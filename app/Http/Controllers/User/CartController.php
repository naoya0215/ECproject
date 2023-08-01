<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $user = User::findOrFail(Auth::id());
        $products = $user->products;
        $totalPrice = 0;
        
        foreach($products as $product) {
            //カートに入れた全ての合計金額をだす
            $totalPrice += $product->price * $product->pivot->quantity;
        }

        return view('user.cart', compact('products', 'totalPrice'));
    }

    public function add(Request $request) 
    {
        $itemIncart = Cart::where('product_id', $request->product_id)
        ->where('user_id', Auth::id())->first();

        if($itemIncart) {
            //カートを追加した時の合計
            $itemIncart->quantity += $request->quantity;
            $itemIncart->save();

        } else {
            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $request->product_id,
                'quantity' => $request->quantity
            ]);
        }
        return redirect()->route('user.cart.index');
    }

    public function delete($id)
    {
        Cart::where('product_id', $id)
        ->where('user_id', Auth::id())
        ->delete();

        return redirect()->route('user.cart.index');
    }

    public function checkout()
    {
        //$user = User::findOrFail(Auth::id());
        //$products = $user->products;

        //$line_items = [];
        //foreach($products as $product) {
        //    $line_item = [
        //        'price' => $product->price,
        //        'quantity' => $product->pivot->quantity,
        //    ];
        //    array_push($line_items, $line_item);
        //}

        //dd($lineItems);

        //\Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        //$session = \Stripe\Checkout\Session::create([
        //    'payment_method_types' => ['card'],
        //    'line_items' => [$line_items],
        //    'mode' => 'payment',
        //    'success_url' => route('user.items.index'),
        //    'cancel_url' => route('user.cart.index'),
        //]);

        //$publickey = env('STRIPE_PUBLIC_KEY');

        //return view('user.checkout', compact('session', 'publickey'));
    }
}
