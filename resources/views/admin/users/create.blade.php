@extends('layouts.app')

@section('content')
    <form
        action="{{ route('admin.users.store') }}"
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

                <div class="col">
                    <div class="form-outline">
                        <label
                            class="form-label"
                            for="password"
                        >Password
                        </label>
                        <input
                            class="form-control"
                            id="password"
                            name="password"
                            type="text"
                            value="{{ old('password', '') }}"
                        />

                        @error('password')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <table class="table table-striped">

                        <thead>

                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Livello</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td>
                                        <input
                                            class="form-control"
                                            name="roles[]"
                                            readonly
                                            type="number"
                                            value=""
                                        >
                                    </td>
                                    <td>
                                        <input
                                            class="form-control"
                                            name="roles[]"
                                            type="text"
                                            value=""
                                        >
                                    </td>
                                    <td>
                                        <input
                                            class="form-control"
                                            name="level[]"
                                            type="number"
                                            value=""
                                        >
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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

    </form>
@endsection
