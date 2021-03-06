<?php

namespace App\Http\Controllers\Frontend\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $comment = $request->comment;
        $cart = $request->session()->get('cart');
        $total = $request->session()->get('total');

        $cart_html = '';
        if (\count($cart)) {
            $cart_ids = implode(', ', array_keys($cart));
            $cart_ids = explode(',', $cart_ids);
            $cart_array = DB::table('shop_products')->whereIn('id', $cart_ids)->get();
        
            foreach ($cart_array as $key => $value) {
                $cart_html .= $value->id . ' - ' . $value->title . ' - ' . $value->cost * config('rate') . '<br/>';
                //$total += $value->cost * $cart[$value->id];
            }
        }
        $data = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'comment' => $comment,
            'order' => $cart_html,
            'total' => $total,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ];

        DB::table('shop_orders')->insert($data);
        $request->session()->flush();

        try{
            Mail::send('frontend.default.shop.emails.your_order', $data, function ($message) use ($email, $name) {
                $message
                ->to($email, $name)
                ->subject('Thanks! Your order');
            });
        
        } catch(\Exception $e){
            echo $e->getMessage();
            die();
        }

        return view('frontend.default.shop.order_success', ['cart_qty' => 0]);
    }
}
