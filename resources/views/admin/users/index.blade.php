@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">

                {{-- if session viene eseguito al ricaricamento della pagina dopodichè viene espulso dal codice --}}
                @if (session('created'))
                    <div class="alert alert-success">
                        l'utente *{{ session('created') }}* è stato creato con successo.
                    </div>
                @endif
                @if (session('edited'))
                    <div class="alert alert-warning">
                        l'utente *{{ session('edited') }}* è stato modificato con successo.
                    </div>
                @endif
                @if (session('deleted'))
                    <div class="alert alert-danger">
                        l'utente *{{ session('deleted') }}* è stato rimosso con successo.
                    </div>
                @endif

                <table class="table table-dark table-hover text-center">
                    <thead>
                        <tr>
                            <th scope="col">Admin</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Mail</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Settings</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <th scope="row">{{ $user->userDetail->admin }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->userDetail->phone }}</td>
                                <td>
                                    <a
                                        class="btn btn-sm btn-success rounded-circle"
                                        href="{{ route('admin.users.show', $user->id) }}"
                                    ><i class="fas fa-eye "></i></a>
                                    <a
                                        class="btn btn-sm btn-primary rounded-circle"
                                        href="{{ route('admin.users.edit', $user->id) }}"
                                    ><i class="fas fa-edit"></i></a>
                                    <form
                                        action="{{ route('admin.users.destroy', $user->id) }}"
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
                            <h1>No users</h1>
                        @endforelse

                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
