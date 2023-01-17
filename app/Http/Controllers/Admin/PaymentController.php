<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::all();
        return view('admin.payments.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $payment = Payment::findOrFail($id);
        return view('admin.payments.show', compact('payment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payment = Payment::findOrFail($id);
        $payment_methods = Payment::select('payment_method')->distinct()->get();
        $statuss = Payment::select('status')->distinct()->get();
        return view('admin.payments.edit', compact('payment', 'payment_methods', 'statuss'));
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
        $oldData = Payment::findOrFail($id);
        $data = $request->all();

        $request->validate(
            [
                'transaction_id' => [
                    'min:3',
                    'max:9',
                    'required',
                    Rule::unique('payments')->ignore($oldData['transaction_id'], 'transaction_id'),
                ],
                'amount' => [
                    'numeric',
                    'required',
                ],
            ]
        );

        $oldData->transaction_id = $data['transaction_id'];
        $oldData->amount = $data['amount'];
        $oldData->payment_method = $data['payment_method'];
        $oldData->status = $data['status'];
        $oldData->save();

        return redirect()
            ->route('admin.payments.show', ['payment' => $oldData])
            ->with('edited', $data['transaction_id']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payment = Payment::findOrFail($id);
        $payment->delete();
        return redirect()
            ->route('admin.payments.index')
            ->with('deleted', $payment['transaction_id']);
    }
}
