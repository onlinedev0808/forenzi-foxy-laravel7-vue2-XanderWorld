<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
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
        $products = Product::all();
        return view('admin.orders.create', compact('products'));
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
        return view('admin.orders.edit', compact('order', 'statuss', 'products'));
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

        $request->validate(
            [
                'order_number' => [
                    'min:3',
                    'max:8',
                    'required',
                    Rule::unique('orders')->ignore($oldData['order_number'], 'order_number'),
                ],
                'status' => [
                    'required',
                ],
                'products' => [
                    'required',
                    'array',
                ],
            ]
        );

        //! UPDATE PIVOT TABLE
        foreach ($request->products as $product) {
            $productId = $product['id'];
            $quantity = $product['quantity'];
            $oldData->products()->updateExistingPivot($productId, compact('quantity'));
        }
        
        $oldData->order_number = $data['order_number'];
        $oldData->status = $data['status'];
        $oldData->total = $data['total'];
        $oldData->save();

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
