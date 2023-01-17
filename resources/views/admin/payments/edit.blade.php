@extends('layouts.app')

@section('content')
    <form
        action="{{ route('admin.payments.update', $payment->id) }}"
        method="post"
    > @csrf @method('PUT')

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="form-outline">
                        <label
                            class="form-label"
                            for="transaction_id"
                        >Numero Transazione
                        </label>
                        <input
                            class="form-control"
                            id="transaction_id"
                            name="transaction_id"
                            rquired
                            type="text"
                            value="{{ old('transaction_id', $payment->transaction_id) }}"
                        />
                        <small
                            class="form-text text-muted"
                            id="transaction_id"
                        >
                            Inserisci qui il codice della transazione.
                        </small>

                        @error('transaction_id')
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
                            for="amount"
                        >Importo
                        </label>
                        <input
                            class="form-control"
                            id="amount"
                            name="amount"
                            required
                            type="text"
                            value="{{ old('amount', $payment->amount) }}"
                        />
                        <small
                            class="form-text text-muted"
                            id="amount"
                        >
                            Inserisci l'importo del pagamento.
                        </small>

                        @error('amount')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col">
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
                                    {{ $payment_method->payment_method == old('payment_method', $payment->payment_method) ? 'selected' : '' }}
                                    value="{{ $payment_method->payment_method }}"
                                >
                                    {{ ucwords($payment_method->payment_method) }}
                                </option>
                            @endforeach
                        </select>

                        <small
                            class="form-text text-muted"
                            id="payment_method"
                        >
                            Scegli il metodo di pagamento.
                        </small>

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
                            for="status"
                        >Stato Pagamento
                        </label>
                        <select
                            class="form-control"
                            id="status"
                            name="status"
                            required
                        >

                            @foreach ($statuss as $status)
                                <option
                                    {{ $status->status == old('status', $payment->status) ? 'selected' : '' }}
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
            </div>
            <hr>
            <div class="row justify-content-center m-4">
                <button
                    class="btn btn-primary btn-floating rounded-circle"
                    type="submit"
                >
                    <i class="fa-2x fas fa-download "></i>
                </button>
            </div>

        </div>

    </form>
@endsection
