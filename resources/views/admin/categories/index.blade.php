@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">

                {{-- if session viene eseguito al ricaricamento della pagina dopodichè viene espulso dal codice --}}
                @if (session('created'))
                    <div class="alert alert-success">
                        La categoria *{{ session('created') }}* è stato creato con successo.
                    </div>
                @endif
                @if (session('edited'))
                    <div class="alert alert-warning">
                        La categoria *{{ session('edited') }}* è stato modificato con successo.
                    </div>
                @endif
                @if (session('deleted'))
                    <div class="alert alert-danger">
                        La categoria *{{ session('deleted') }}* è stato rimosso con successo.
                    </div>
                @endif

                <table class="table table-dark table-hover text-center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Color</th>
                            <th scope="col">Settings</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                            <tr>
                                <th scope="row">{{ $category->id }}</th>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->color }}</td>
                                <td>
                                    <a
                                        class="btn btn-sm btn-success rounded-circle"
                                        href="{{ route('admin.categories.show', $category->id) }}"
                                    ><i class="fas fa-eye "></i></a>
                                    <a
                                        class="btn btn-sm btn-primary rounded-circle"
                                        href="{{ route('admin.categories.edit', $category->id) }}"
                                    ><i class="fas fa-edit"></i></a>

                                </td>
                            </tr>
                        @empty
                            <h1>No Categories</h1>
                        @endforelse

                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
