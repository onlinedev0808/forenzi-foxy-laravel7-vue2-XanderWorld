@extends('layouts.app')

@section('content')
    <form
        action="{{ route('admin.users.update', $user->id) }}"
        method="post"
    > @csrf @method('PUT')

        <div class="container">
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
                            value="{{ old('name', $user->name) }}"
                        />
                        <small
                            class="form-text text-muted"
                            id="name"
                        >
                            Inserisci qui il nome dell'utente.
                        </small>

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
                            for="email"
                        >Email
                        </label>
                        <input
                            class="form-control"
                            id="email"
                            name="email"
                            required
                            type="text"
                            value="{{ old('email', $user->email) }}"
                        />

                        <small
                            class="form-text text-muted"
                            id="email"
                        >
                            Inserisci qui la mail dell'utente.
                        </small>

                        @error('email')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                </div>
            </div>


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
