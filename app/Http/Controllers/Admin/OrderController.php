<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;
use App\Models\userDetail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $products = Product::all();
        // $statuss = Order::select('status')->distinct()->get();
        // $paymentStatuses = Payment::select('payment_status')->distinct()->get();
        // $payment_methods = Payment::select('payment_method')->distinct()->get();
        // return view('admin.orders.create', compact('statuss', 'products', 'payment_methods', 'paymentStatuses'));
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
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('admin.orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $order = Order::findOrFail($id);

        $products = Product::all();
        $statuss = Order::select('status')->distinct()->get();
        $paymentStatuses = Payment::select('payment_status')->distinct()->get();
        $payment_methods = Payment::select('payment_method')->distinct()->get();
        return view('admin.orders.edit', compact('order', 'statuss', 'products', 'payment_methods', 'paymentStatuses'));
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
        $data = $request->all();
        // dd($data);
        $oldData = Order::findOrFail($id);


        // $request->validate(
        //     [
        //         'order_number' => [
        //             'min:3',
        //             'max:8',
        //             'required',
        //             Rule::unique('orders')->ignore($oldData['order_number'], 'order_number'),
        //         ],
        //         'status' => [
        //             'required',
        //         ],
        //         'products' => [
        //             'required',
        //             'array',
        //         ],
        //     ]
        // );

        //! UPDATE PIVOT TABLE

        foreach ($request->products as $product) {

            $productId = $product['product_id'];
            $quantity = $product['quantity'];
            $oldData->products()->updateExistingPivot($productId, compact('quantity'));
        }




        foreach ($request->products as $product) {

            $productId = $product['product_id'];
            $thisProduct = Product::findOrFail($productId);

            // dd($thisProduct->code);
            $thisProduct->code = $product['code'];
            $thisProduct->name = $product['name'];
            $thisProduct->price = $product['price'];
            $thisProduct->save();
        }




        // dd($request->products);





        $oldData->order_number = $data['order_number'];
        $oldData->status = $data['status'];
        $oldData->shipping_cost = $data['shipping_cost'];
        $oldData->conai = $data['conai'];
        $oldData->iva = $data['iva'];
        $oldData->subtotal = $data['subtotal'];
        $oldData->total = $data['total'];
        $oldData->save();

        $orderId = $data['id'];
        $thisPayment = Payment::find($orderId);
        $thisPayment->payment_method = $data['payment_method'];
        $thisPayment->payment_status = $data['payment_status'];
        $thisPayment->save();


        $oldData->user->name = $data['name'];
        $oldData->user->email = $data['email'];
        $oldData->user->save();

        $userId = $oldData->user->id;
        $userDetail = UserDetail::where('user_id', $userId)->first();
        $userDetail->surname = $data['surname'];
        $userDetail->address = $data['address'];
        $userDetail->business_name = $data['business_name'];
        $userDetail->cap = $data['cap'];
        $userDetail->city = $data['city'];
        $userDetail->state = $data['state'];
        $userDetail->province = $data['province'];
        $userDetail->notes = $data['notes'];
        $userDetail->phone = $data['phone'];
        $userDetail->pec = $data['pec'];
        $userDetail->code_sdi = $data['code_sdi'];
        $userDetail->save();











        return redirect()
            ->route('admin.orders.show', ['order' => $oldData])
            ->with('edited', $data['order_number']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect()
            ->route('admin.orders.index')
            ->with('deleted', $order['order_number']);
    }
}
