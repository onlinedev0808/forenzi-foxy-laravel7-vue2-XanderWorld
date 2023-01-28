{{-- @extends('layouts.app')

@section('content')
    <form
        action="{{ route('admin.products.store') }}"
        method="post"
    > @csrf @method('POST')

        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="row">
                        <div class="col">
                            <div class="form-outline">
                                <label
                                    class="form-label"
                                    for="name"
                                >Nome
                                </label>
                                <input
                                    class="form-control"
                                    id="name"
                                    name="name"
                                    required
                                    type="text"
                                    value="{{ old('name', '') }}"
                                />

                                @error('name')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <div class="form-outline">
                                <label
                                    class="form-label"
                                    for="surname"
                                >Cognome
                                </label>
                                <input
                                    class="form-control"
                                    id="surname"
                                    name="surname"
                                    required
                                    type="text"
                                    value="{{ old('surname', '') }}"
                                />

                                @error('name')
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
                                    for="business_name"
                                >Ragione Sociale
                                </label>
                                <input
                                    class="form-control"
                                    id="business_name"
                                    name="business_name"
                                    required
                                    type="text"
                                    value="{{ old('business_name', '') }}"
                                />

                                @error('business_name')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <div class="form-outline">
                                <label
                                    class="form-label"
                                    for="address"
                                >Indirizzo
                                </label>
                                <input
                                    class="form-control"
                                    id="address"
                                    name="address"
                                    required
                                    type="text"
                                    value="{{ old('address', '') }}"
                                />

                                @error('address')
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
                                    for="cap"
                                >Cap
                                </label>
                                <input
                                    class="form-control"
                                    id="cap"
                                    name="cap"
                                    required
                                    type="text"
                                    value="{{ old('cap', '') }}"
                                />

                                @error('cap')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <div class="form-outline">
                                <label
                                    class="form-label"
                                    for="city"
                                >Città
                                </label>
                                <input
                                    class="form-control"
                                    id="city"
                                    name="city"
                                    required
                                    type="city"
                                    value="{{ old('city', '') }}"
                                />

                                @error('city')
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
                                    for="province"
                                >Provincia
                                </label>
                                <input
                                    class="form-control"
                                    id="province"
                                    name="province"
                                    required
                                    type="text"
                                    value="{{ old('province', '') }}"
                                />

                                @error('province')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <div class="form-outline">
                                <label
                                    class="form-label"
                                    for="state"
                                >Stato
                                </label>
                                <input
                                    class="form-control"
                                    id="state"
                                    name="state"
                                    required
                                    type="text"
                                    value="{{ old('state', '') }}"
                                />

                                @error('state')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-outline">
                                <label
                                    class="form-label"
                                    for="phone"
                                >Telefono
                                </label>
                                <input
                                    class="form-control"
                                    id="phone"
                                    name="phone"
                                    required
                                    type="text"
                                    value="{{ old('phone', '') }}"
                                />

                                @error('phone')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <div class="form-outline">
                                <label
                                    class="form-label"
                                    for="email"
                                >Email
                                </label>
                                <input
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    required
                                    type="text"
                                    value="{{ old('email', '') }}"
                                />

                                @error('email')
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
                                    for="pec"
                                >Pec
                                </label>
                                <input
                                    class="form-control"
                                    id="pec"
                                    name="pec"
                                    required
                                    type="text"
                                    value="{{ old('pec', '') }}"
                                />

                                @error('pec')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <div class="form-outline">
                                <label
                                    class="form-label"
                                    for="code_sdi"
                                >Codice Sdi
                                </label>
                                <input
                                    class="form-control"
                                    id="code_sdi"
                                    name="code_sdi"
                                    required
                                    type="text"
                                    value="{{ old('code_sdi', '') }}"
                                />

                                @error('code_sdi')
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
                                    for="notes"
                                >Note
                                </label>

                                <textarea
                                    class="form-control"
                                    cols="30"
                                    id="notes"
                                    name="notes"
                                    required
                                    rows="4"
                                    style="white-space: nowrap !important;"
                                    type="text"
                                >{{ old('notes', '') }}</textarea>

                                @error('pec')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <hr>

            <div class="row">

                <div class="col-2 ">
                    <div class="form-outline">
                        <label
                            class="form-label"
                            for="id"
                        >Id
                        </label>
                        <input
                            class="form-control"
                            id="id"
                            name="id"
                            readonly
                            required
                            type="text"
                            value=""
                        />

                        @error('order_number')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
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
                            value="{{ old('order_number', '') }}"
                        />

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
                        >Stato
                        </label>
                        <select
                            class="form-control"
                            id="status"
                            name="status"
                            required
                        >

                            @foreach ($statuss as $status)
                                <option
                                    {{ $status->status == old('status', '') ? 'selected' : '' }}
                                    value="{{ $status->status }}"
                                >
                                    {{ ucwords($status->status) }}
                                </option>
                            @endforeach

                        </select>

                        @error('status')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <div class="form-outline">
                        <label
                            class="form-label"
                            for="shipping_cost"
                        >Costo Di Spedizione
                        </label>

                        <input
                            class="form-control"
                            id="shipping_cost"
                            name="shipping_cost"
                            rquired
                            type="text"
                            value="{{ old('shipping_cost', '') }}"
                        />

                        @error('shipping_cost')
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
                            for="conai"
                        >Conai
                        </label>
                        <input
                            class="form-control"
                            id="conai"
                            name="conai"
                            required
                            type="text"
                            value="{{ old('conai', '') }}"
                        />

                        @error('conai')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <div class="form-outline">
                        <label
                            class="form-label"
                            for="iva"
                        >Iva
                        </label>
                        <input
                            class="form-control"
                            id="iva"
                            name="iva"
                            required
                            type="text"
                            value="{{ old('iva', '') }}"
                        />

                        @error('iva')
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
                            for="subtotal"
                        >Subtotale
                        </label>
                        <input
                            class="form-control"
                            id="subtotal"
                            name="subtotal"
                            required
                            type="text"
                            value="{{ old('subtotal', '') }}"
                        />

                        @error('subtotal')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <div class="form-outline">
                        <label
                            class="form-label"
                            for="total"
                        >Totale
                        </label>
                        <input
                            class="form-control"
                            id="total"
                            name="total"
                            required
                            type="text"
                            value="{{ old('total', '') }}"
                        />

                        @error('total')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-2">
                    <div class="form-outline">
                        <label
                            class="form-label"
                            for="payment_method"
                        >Metodo Di Pagamento
                        </label>
                        <select
                            class="form-control"
                            id="payment_method"
                            name="payment_method"
                            required
                        >
                            @foreach ($payment_methods as $payment_method)
                                <option
                                    {{ $payment_method->payment_method == old('payment_method', '') ? 'selected' : '' }}
                                    value="{{ $payment_method->payment_method }}"
                                >
                                    {{ ucwords($payment_method->payment_method) }}
                                </option>
                            @endforeach
                        </select>

                        @error('payment_method')
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
                            for="payment_status"
                        >Stato Pagamento
                        </label>
                        <select
                            class="form-control"
                            id="payment_status"
                            name="payment_status"
                            required
                        >

                            @foreach ($paymentStatuses as $paymentStatus)
                                <option
                                    {{ $paymentStatus->payment_status == old('payment_status', '') ? 'selected' : '' }}
                                    value="{{ $paymentStatus->payment_status }}"
                                >
                                    {{ ucwords($paymentStatus->payment_status) }}
                                </option>
                            @endforeach

                        </select>

                        @error('payment_status')
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
                        <th>Id</th>
                        <th>Codice</th>
                        <th>Nome</th>
                        <th>Quantità</th>
                        <th>Prezzo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order->products as $product)
                        <tr>

                            <td>
                                <input
                                    class="form-control"
                                    name="products[{{ $product->id }}][product_id]"
                                    readonly
                                    type="number"
                                    value="{{ old("products.$product->id.product_id", '') }}"
                                >
                            </td>

                            <td>
                                <input
                                    class="form-control"
                                    name="products[{{ $product->id }}][code]"
                                    type="number"
                                    value="{{ old("products.$product->id.code", '') }}"
                                >
                            </td>
                            <td>
                                <input
                                    class="form-control"
                                    name="products[{{ $product->id }}][name]"
                                    type="text"
                                    value="{{ old("products.$product->id.name", '') }}"
                                >
                            </td>
                            <td>
                                <input
                                    class="form-control"
                                    name="products[{{ $product->id }}][quantity]"
                                    type="number"
                                    value="{{ old("products.$product->id.quantity", '') }}"
                                >
                            </td>
                            <td>
                                <input
                                    class="form-control"
                                    min="1"
                                    name="products[{{ $product->id }}][price]"
                                    step="any"
                                    type="number"
                                    value="{{ old("products.$product->id.price", '') }}"
                                >
                            </td>
                            {{-- <td>
                                <button
                                    class="btn btn-danger"
                                    name="remove"
                                    type="submit"
                                    value="{{ $product->id }}"
                                >Remove</button>
                            </td> 
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
@endsection --}}
