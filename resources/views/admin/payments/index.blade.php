@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">

                {{-- if session viene eseguito al ricaricamento della pagina dopodichè viene espulso dal codice --}}
                @if (session('created'))
                    <div class="alert alert-success">
                        l'ordine *{{ session('created') }}* è stato creato con successo.
                    </div>
                @endif
                @if (session('edited'))
                    <div class="alert alert-warning">
                        l'ordine *{{ session('edited') }}* è stato modificato con successo.
                    </div>
                @endif
                @if (session('deleted'))
                    <div class="alert alert-danger">
                        l'ordine *{{ session('deleted') }}* è stato rimosso con successo.
                    </div>
                @endif

                <table class="table table-dark table-hover text-center">
                    <thead>
                        <tr>
                            <th scope="col">Utente</th>
                            <th scope="col">Numero Ordine</th>
                            <th scope="col">Numero Transizione</th>
                            <th scope="col">Metodo Di Pagamento</th>
                            <th scope="col">Stato Pagamento</th>
                            <th scope="col">Importo</th>
                            <th scope="col">Settings</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($payments as $payment)
                            <tr>
                                <th scope="row">{{ $payment->order->user->name }}</th>
                                <th>{{ $payment->order->order_number }}</th>
                                <th>{{ $payment->transaction_id }}</th>
                                <td>{{ $payment->payment_method }}</td>
                                <td>
                                    <span
                                        class="badge badge-pill py-1"
                                        style="
                                        @if ($payment->payment_status == 'successo') background-color: #005c00;
                                        @elseif($payment->payment_status == 'fallito') 
                                            background-color: #8b0000;
                                        @elseif($payment->payment_status == 'in attesa') 
                                            background-color: #cccc00; @endif"
                                    >
                                        {{ $payment->payment_status }}
                                        
                                    </span>
                                </td>
                                <td>€{{ $payment->amount }}</td>
                                <td>
                                    <a
                                        class="btn btn-sm btn-success rounded-circle"
                                        href="{{ route('admin.payments.show', $payment->id) }}"
                                    ><i class="fas fa-eye "></i></a>
                                    <a
                                        class="btn btn-sm btn-primary rounded-circle"
                                        href="{{ route('admin.payments.edit', $payment->id) }}"
                                    ><i class="fas fa-edit"></i></a>
                                    <form
                                        action="{{ route('admin.payments.destroy', $payment->id) }}"
                                        class="d-inline"
                                        method="POST"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            class="btn btn-sm btn-danger rounded-circle"
                                            type="submit"
                                        >
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <h1>No payments</h1>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
