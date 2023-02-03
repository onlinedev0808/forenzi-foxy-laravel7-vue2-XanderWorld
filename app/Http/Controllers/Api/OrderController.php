<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\Payment;
use App\Models\UserDetail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Log;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::with('products.category')->paginate(5);
        return response()->json([
            "response" => true,
            "count" => count($orders),
            "results" => $orders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id = Auth::id();
        //
        Log::debug(json_encode($request->user()));
        $order_exist = Order::where([
            ['user_id','=', $id],
            ['status', '=', 'in attesa']
        ])->first();
    
        $order_product = $request->all();
        
        if ($order_exist != null) {
            $order_product_exist = DB::table('order_product')->where([
                ['product_id', '=', $order_product['id']],
                ['order_id', '=', $order_exist['id']]
            ])->first();

            if ($order_product_exist != null) {
                $product = DB::table('products')->select('quantity')->where('id', $order_product_exist->product_id)->first();//in product: original qu
                $order_pro = DB::table('order_product')->select('quantity')->where([
                    ['product_id', '=', $order_product_exist->product_id],
                    ['order_id', '=', $order_exist->id]
                ])->first();//in order_product, qu
                   
                if ($product->quantity < $order_product['quantity'] + $order_pro->quantity)
                    return response() -> json([
                        "response"=> true,
                        "result"=> 'over quantity'
                    ]);

                DB::table('order_product')->where([
                    ['product_id', '=', $order_product_exist->product_id],
                    ['order_id', '=', $order_exist->id]
                ])->increment('quantity', $order_product['quantity'], ['updated_at' => now()]);

            } else {
                DB::table('order_product')->insert([
                    'product_id' => $order_product['id'],
                    'quantity' => $order_product['quantity'],
                    'order_id' => $order_exist->id,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }
        else
        {
            $orderLog = new Order();
            $orderLog->user_id = $id;
            $orderLog->order_number = random_int(1, 23234342);
            $orderLog->status = 'in attesa';
            $orderLog->total = 0;
            $orderLog->subtotal = 0;
            $orderLog->shipping_cost = 0;
            $orderLog->conai = 0;
            $orderLog->iva = 0;
            $orderLog->created_at = now();
            
            $orderLog->save();

            if($orderLog == true) {
                $order_id = Order::where([
                    ['user_id','=', $id],
                    ['status', '=', 'in attesa']
                ])->first()['id'];

                DB::table('order_product')->create([
                    'product_id' => $order_product['id'],
                    'quantity' => $order_product['quantity'],
                    'order_id' => $order_id,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            } else {
                return response() -> json([
                    "response"=> true,
                    "result" => "order creat error"
                ]);
            }
        }

        $oid = DB::table('orders')->where([
            ['user_id', '=', $id],
            ['status', '=', 'in attesa']
        ])->first();

        $order_products = DB::table('order_product')->where([
            'order_id' => $oid->id
        ])->get();
        
        $subtotal = 0.00;
        $rejectedList = [];
        foreach ($order_products as $op) {
            $tmp = DB::table('products')->select(['quantity', 'price'])->where('id', $op->product_id)->first();
            
            if ($tmp->quantity > $op->quantity) {
                $subtotal += $tmp->price * $op->quantity;
            } else {
                $subtotal += $tmp->price * $tmp->quantity;
                array_push($rejectedList, $op->order_id.'->'.$op->product_id);
            }
        }
// conai, iva shipping_cost random value must be setted
        Order::where('id', $oid->id)->update([
            'subtotal' => $subtotal,
            'shipping_cost' => 0,
            'conai' => round($subtotal * 22.00 / 100, 2),
            'iva' => 4.35,
            'total' => round($subtotal + $subtotal * 22.00 / 100 + 4.35, 2),
            'updated_at' => now()
        ]);

        return response() -> json([
            "response"=> true,
            "result"=> $subtotal,
            "productCount" => count($order_products),
            "rejected" => $rejectedList
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $order = Order::with('products.category')->where('user_id', Auth::id())->first();
        return response()->json([
            "response" => true,
            "user_id" => Auth::id(),
            "results" => $order
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $params = $request->all();

        $old_product = Order::where('user_id', Auth::id())->first();
        $order_id = $old_product->id;

        $total = 0.00;
        $subtotal = 0.00;
        $shipping_cost = 0.00;
        $conai = 0.00;
        $iva = 0.00;
        
        foreach($params as $op) {
            $old_order = DB::table('order_product')->where([
                ['order_id', $order_id], 
                ['product_id', $op['id']]
            ])->update([
                'quantity' => $op['quantity']
            ]);

            $tmp = Product::select(['quantity', 'price'])->where('id', $op['id'])->first();
            if ($tmp->attributes['quantity'] < $op['quantity']) {
                $subtotal += $tmp->price * $op['quantity'];
            }
            $shipping_cost = 0.00;
            $conai = $subtotal * 22.00 / 100;
            $iva = 4.35;
        }

        $total = $subtotal + $shipping_cost + $conai + $iva;

        $old_order = Order::where('user_id', Auth::id())->first();
        
        $old_order->total = $total;
        $old_order->subtotal = $subtotal;
        $old_order->shipping_cost = $shipping_cost;
        $old_order->conai = $conai;
        $old_order->iva = $iva;
        $old_order->order_number = random_int(1, 23234342);
        $old_order->updated_at = now();
        $old_order->save();

        return response() -> json([
            "response"=> true,
            "order" => $old_order
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = DB::table('order_product')->where(
            'product_id', $id
        )->delete();
        if ($product['order_id'])
            return response() -> json([
                "response" => false
            ]);
        else
            return response() -> json([
                "response" => true
            ]);
    }

    // transmit shipping & payment information
    public function transmit(Request $request, $id)
    {
        $params = $request->all();
        // update order_product
        $order = Order::where('user_id', Auth::id())-> first();
        // $order = Order::where('id', $id)->first();
        $order->status = 'spedito';

        if ($order->save()) {
            // create user_detail
            $user_detail = new UserDetail;
            $user_detail->user_id = Auth::id();
            $user_detail->surname = $params['user_detail']['surname'];
            $user_detail->business_name = $params['user_detail']['business_name'];
            $user_detail->notes = $params['user_detail']['notes'];
            $user_detail->address = $params['user_detail']['address'];
            $user_detail->phone = $params['user_detail']['phone'];
            $user_detail->city = $params['user_detail']['city'];
            $user_detail->cap = $params['user_detail']['cap'];
            $user_detail->province = $params['user_detail']['province'];
            $user_detail->state = $params['user_detail']['state'];
            $user_detail->pec = $params['user_detail']['pec'];
            $user_detail->code_sdi = $params['user_detail']['code_sdi'];
            $user_detail->admin = 'registered'; // set static
            $user_detail->created_at = now();
            $user_detail->updated_at = now();

            if ($user_detail->save()) {
                
                // create payment
                $payment = new Payment;
                $payment->order_id = $order->id;
                $payment->transaction_id = random_int(1, 23234342);
                $payment->payment_method = 'PayPal';    // set static
                $payment->amount = $params['payment']['amount'];
                $payment->payment_status = 'successo';  // set static
                $payment->created_at = now();
                $payment->updated_at = now();

                if ($payment->save())
                    // if save success
                    return true;
            } 
        }
    }
}
