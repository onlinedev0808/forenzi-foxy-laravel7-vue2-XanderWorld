@extends('layouts.app')

@section('content')
    <form
        action="{{ route('admin.categories.update', $category->id) }}"
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
                                    value="{{ old('name', $category->name) }}"
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
                                    for="description"
                                >Descrizione
                                </label>
                                <input
                                    class="form-control"
                                    id="description"
                                    name="description"
                                    required
                                    type="text"
                                    value="{{ old('description', $category->description) }}"
                                />

                                @error('description')
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
                                    for="img"
                                >Immagine
                                </label>
                                <input
                                    class="form-control"
                                    id="img"
                                    name="img"
                                    required
                                    type="text"
                                    value="{{ old('img', $category->img) }}"
                                />

                                @error('img')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-outline">
                                <label
                                    class="form-label"
                                    for="img2"
                                >Logo
                                </label>
                                <input
                                    class="form-control"
                                    id="img2"
                                    name="img2"
                                    required
                                    type="text"
                                    value="{{ old('img2', $category->img2) }}"
                                />

                                @error('img2')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

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
