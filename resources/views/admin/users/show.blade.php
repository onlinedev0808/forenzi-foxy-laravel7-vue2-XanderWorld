@extends('layouts.app')

@section('content')
    <div class="container">
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
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-center">

                <article class="card card-arrow my-5">
                    <a
                        class="card__link"
                        href="#"
                    >

                        <!-- Icon -->
                        <div class="card__icon">
                            <svg viewbox="0 0 1129 994">
                                <g
                                    fill-rule="nonzero"
                                    fill="none"
                                    stroke-width="41"
                                    stroke="#999"
                                >
                                    <path d="M564.5 212.437L95.67 873.5h937.66L564.5 212.437z" />
                                    <path d="M564.5 407.47L163.638 973.5h801.724L564.5 407.47z" />
                                    <path d="M564.5 35.409L39.699 774.5H1089.3L564.5 35.409z" />
                                </g>
                            </svg>
                        </div>

                        <!-- Media -->
                        <div class="card__media">
                            <svg viewbox="0 0 1129 994">
                                <g
                                    fill-rule="nonzero"
                                    fill="none"
                                    stroke-width="41"
                                    stroke="#F5F5F5"
                                >
                                    <path d="M564.5 212.437L95.67 873.5h937.66L564.5 212.437z" />
                                    <path d="M564.5 407.47L163.638 973.5h801.724L564.5 407.47z" />
                                    <path d="M564.5 35.409L39.699 774.5H1089.3L564.5 35.409z" />
                                </g>
                            </svg>
                        </div>

                        <!-- Header -->
                        <div class="card__header">
                            <h3 class="card__header-title">{{ $user->name }} {{ $user->userDetail->surname }}</h3>
                            <div class="d-flex">
                                <i class="fas fa-user-cog mx-1"></i>
                                <p class="card__header-meta">{{ ucwords($user->userDetail->admin) }}</p>
                            </div>

                            <div class="card__header-icon">
                                <svg
                                    fill="#fff"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"
                                    />
                                </svg>

                            </div>
                        </div>

                    </a>
                </article>

            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <table class="table table-dark table-hover text-center">
                    <thead>
                        <tr>
                            <th scope="row">Utente</th>
                            <th scope="col">Stato</th>
                            <th scope="col">Città</th>
                            <th scope="col">Provincia</th>
                            <th scope="col">Indirizzo</th>
                            <th scope="col">Cap</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->userDetail->state }}</td>
                            <td>{{ $user->userDetail->city }}</td>
                            <td>{{ $user->userDetail->province }}</td>
                            <td>{{ $user->userDetail->address }}</td>
                            <td>{{ $user->userDetail->cap }}</td>
                        </tr>

                    </tbody>
                </table>

                <table class="table table-dark table-hover text-center">
                    <thead>
                        <tr>
                            <th scope="row">Utente</th>
                            <th scope="col">Ragione Sociale</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Pec</th>
                            <th scope="col">Codice Sdi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->userDetail->business_name }}</td>
                            <td>{{ $user->userDetail->phone }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->userDetail->pec }}</td>
                            <td>{{ $user->userDetail->code_sdi }}</td>
                        </tr>

                    </tbody>
                </table>
                <a
                    class="btn btn-sm btn-primary rounded-circle btn-floating"
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
                        class="btn btn-sm btn-danger rounded-circle btn-floating"
                        type="submit"
                    >
                        <i class="fas fa-trash"></i>
                    </button>
                </form>

                {{-- @if ($user->products->count() > 0)
                    <table>
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user->products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->pivot->quantity }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <h1>No Products For This user</h1>
                @endif --}}

            </div>
        </div>
    </div>
@endsection
