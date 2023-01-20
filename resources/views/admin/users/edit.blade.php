@extends('layouts.app')

@section('content')
    <form
        action="{{ route('admin.users.update', $user->id) }}"
        method="post"
    > @csrf @method('PUT')

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
                                    value="{{ old('name', $user->name) }}"
                                    wrap="hard"
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
                                    value="{{ old('surname', $user->userDetail->surname) }}"
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
                                    value="{{ old('business_name', $user->userDetail->business_name) }}"
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
                                    value="{{ old('address', $user->userDetail->address) }}"
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
                                    value="{{ old('cap', $user->userDetail->cap) }}"
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
                                    value="{{ old('city', $user->userDetail->city) }}"
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
                                    value="{{ old('province', $user->userDetail->province) }}"
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
                                    value="{{ old('state', $user->userDetail->state) }}"
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
                                    value="{{ old('phone', $user->userDetail->phone) }}"
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
                                    value="{{ old('email', $user->email) }}"
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
                                    value="{{ old('pec', $user->userDetail->pec) }}"
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
                                    type="number"
                                    value="{{ old('code_sdi', $user->userDetail->code_sdi) }}"
                                />

                                @error('code_sdi')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                        </div>

                        <div class="col d-flex align-items-center justify-content-center">
                            <div class="form-outline">
                                <label
                                    class="form-label"
                                    for="notes"
                                >Note
                                </label>

                                <textarea
                                    class="form-control"
                                    cols="40"
                                    id="notes"
                                    name="notes"
                                    required
                                    rows="4"
                                    style="white-space: wrap !important;"
                                    type="text"
                                >{{ old('notes', $user->userDetail->notes) }}</textarea>

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
                            required
                            type="text"
                            value="{{ old('password', '') }}"
                        />

                        @error('password')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    {{-- i already have the admin column in userDetails so im not gonna use role <table class="table table-striped">

                        <thead>

                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Livello</th>
                            </tr>
                        </thead>
                        @foreach ($user->roles as $role)
                            <tr>
                                <td>
                                    <input
                                        class="form-control"
                                        name="roles[{{ $role->id }}][role_id]"
                                        readonly
                                        type="number"
                                        value="{{ old("roles.$role->id.role_id", $role->pivot->role_id) }}"
                                    >
                                </td>
                                <td>
                                    <select
                                        class="form-control"
                                        name="roles[{{ $role->id }}][name]"
                                    >
                                        @foreach ($roles as $availableRole)
                                            <option
                                                {{ $availableRole->name == $role->name ? 'selected' : '' }}
                                                value="{{ $availableRole->name }}"
                                            >
                                                {{ $availableRole->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <input
                                        class="form-control"
                                        name="roles[{{ $role->id }}][level]"
                                        readonly
                                        type="number"
                                        value="{{ $role->level }}"
                                    >
                                </td>
                            </tr>
                        @endforeach
                    </table> --}}

                    <div class="table-responsive">
                        <table class="table table-white table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>User ID</th>
                                    <th>User Name</th>
                                    <th>Level</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>
                                        <select
                                            class="form-control"
                                            name="admin"
                                        >
                                            @foreach ($levels as $level)
                                                <option
                                                    {{ old('admin', $user->userDetail->admin) == $level->admin ? 'selected' : '' }}
                                                    value="{{ $level->admin }}"
                                                >
                                                    {{ $level->admin }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        @error('admin')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

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
