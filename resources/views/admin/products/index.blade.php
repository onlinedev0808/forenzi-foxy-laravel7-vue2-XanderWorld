@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row text-center">
            <div class="col-12">

                {{-- if session viene eseguito al ricaricamento della pagina dopodichè viene espulso dal codice --}}
                @if (session('created'))
                    <div class="alert alert-success">
                        l'elemento *{{ session('created') }}* è stato creato con successo.
                    </div>
                @endif
                @if (session('edited'))
                    <div class="alert alert-warning">
                        l'elemento *{{ session('edited') }}* è stato modificato con successo.
                    </div>
                @endif
                @if (session('deleted'))
                    <div class="alert alert-danger">
                        l'elemento *{{ session('deleted') }}* è stato rimosso con successo.
                    </div>
                @endif

                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Codice</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Misure</th>
                            <th scope="col">Quantità</th>
                            <th scope="col">Prezzo</th>
                            <th scope="col">Settings</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <th scope="row">{{ $product->code }}</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->length }} x {{ $product->width }} x {{ $product->height }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>€{{ $product->price }}</td>
                                <td>
                                    <a
                                        class="btn btn-sm btn-success rounded-circle"
                                        href="{{ route('admin.products.show', $product->id) }}"
                                    ><i class="fas fa-eye "></i></a>
                                    <a
                                        class="btn btn-sm btn-primary rounded-circle"
                                        href="{{ route('admin.products.edit', $product->id) }}"
                                    ><i class="fas fa-edit "></i></a>
                                    <form
                                        action="{{ route('admin.products.destroy', $product->id) }}"
                                        class="d-inline"
                                        method="POST"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            class="btn btn-sm btn-danger rounded-circle"
                                            type="submit"
                                        >
                                            <i class="fas fa-trash "></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <h1>No Products</h1>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
