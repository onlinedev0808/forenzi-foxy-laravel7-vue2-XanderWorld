@extends('layouts.app')

@section('content')
    <form
        action="{{ route('admin.orders.update', $order->id) }}"
        method="post"
    > @csrf @method('PUT')

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="form-outline">
                        <label
                            class="form-label"
                            for="order_number"
                        >Numero Ordine
                        </label>
                        <input
                            class="form-control"
                            id="order_number"
                            name="order_number"
                            rquired
                            type="text"
                            value="{{ old('order_number', $order->order_number) }}"
                        />
                        <small
                            class="form-text text-muted"
                            id="order"
                        >
                            Inserisci qui il numero dell'ordine.
                        </small>

                        @error('order_number')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label
                            class="form-label"
                            for="status"
                        >Stato Ordine
                        </label>
                        <select
                            class="form-control"
                            id="status"
                            name="status"
                            required
                        >

                            @foreach ($statuss as $status)
                                <option
                                    {{ $status->status == old('status', $order->status) ? 'selected' : '' }}
                                    value="{{ $status->status }}"
                                >
                                    {{ ucwords($status->status) }}
                                </option>
                            @endforeach

                        </select>

                        <small
                            class="form-text text-muted"
                            id="status"
                        >
                            Scegli lo stato dell'ordine.
                        </small>

                        @error('status')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label
                            class="form-label"
                            for="total"
                        >Prezzo Ordine
                        </label>
                        <input
                            class="form-control"
                            id="total"
                            name="total"
                            required
                            type="text"
                            value="{{ old('total', $order->total) }}"
                        />
                        <small
                            class="form-text text-muted"
                            id="total"
                        >
                            Inserisci qui il prezzo dell'ordine.
                        </small>

                        @error('total')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                </div>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order->products as $product)
                        <tr>
                            <input
                                name="products[{{ $product->id }}][id]"
                                type="hidden"
                                value="{{ $product->id }}"
                            >
                            <td>{{ $product->name }}</td>
                            <td><input
                                    class="form-control"
                                    name="products[{{ $product->id }}][quantity]"
                                    type="number"
                                    value="{{ old("products.$product->id.quantity", $product->pivot->quantity) }}"
                                ></td>
                            {{-- <td>
                                <button
                                    class="btn btn-danger"
                                    name="remove"
                                    type="submit"
                                    value="{{ $product->id }}"
                                >Remove</button>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="row justify-content-center m-4">
                <button
                    class="btn btn-primary btn-floating rounded-circle"
                    type="submit"
                >
                    <i class="fas fa-download "></i>
                </button>
            </div>

        </div>

    </form>
@endsection
