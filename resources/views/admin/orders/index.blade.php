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
                            <th scope="col">Numero </th>
                            <th scope="col">Data</th>
                            <th scope="col">Stato Ordine </th>
                            <th scope="col">Stato Pagamento </th>
                            <th scope="col">Totale</th>
                            <th scope="col">Impostazioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)
                            <tr>
                                <th scope="row">{{ $order->user->email }}</th>
                                <td>{{ $order->order_number }}</td>
                                <td>{{ $order->order_date }}</td>
                                <td>
                                    <span
                                        class="badge badge-pill py-1"
                                        style="
                                        @if ($order->status == 'consegnato') background-color: #005c00;
                                        @elseif($order->status == 'annullato') 
                                            background-color: #8b0000;
                                        @elseif($order->status == 'spedito') 
                                            background-color: #000066;
                                        @elseif($order->status == 'in attesa') 
                                            background-color: #cccc00; @endif"
                                    >
                                        {{ $order->status }}
                                    </span>
                                </td>
                                <td>
                                    <span
                                        class="badge badge-pill py-1"
                                        style="
                                        @if ($order->payment->payment_status == 'successo') background-color: #005c00;
                                        @elseif($order->payment->payment_status == 'fallito') 
                                            background-color: #8b0000;
                                        @elseif($order->payment->payment_status == 'in attesa') 
                                            background-color: #cccc00; @endif"
                                    >
                                        {{ $order->payment->payment_status }}
                                    </span>
                                </td>
                                <td>€{{ $order->total }}</td>
                                <td>
                                    <a
                                        class="btn btn-sm btn-success rounded-circle"
                                        href="{{ route('admin.orders.show', $order->id) }}"
                                    ><i class="fas fa-eye "></i></a>
                                    <a
                                        class="btn btn-sm btn-primary rounded-circle"
                                        href="{{ route('admin.orders.edit', $order->id) }}"
                                    ><i class="fas fa-edit"></i></a>
                                    <form
                                        action="{{ route('admin.orders.destroy', $order->id) }}"
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
                            <h1>No Orders</h1>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
