@extends('layouts.app')

@section('content')
    <form
        action="{{ route('admin.products.store') }}"
        method="post"
    > @csrf @method('POST')

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="form-outline">
                        <label
                            class="form-label"
                            for="order_number"
                        >Numero Ordine
                        </label>
                        <input
                            class="form-control"
                            id="order_number"
                            name="order_number"
                            required
                            type="text"
                            value="{{ old('order_number', '') }}"
                        />
                        <small
                            class="form-text text-muted"
                            id="order_number"
                        >
                            Inserisci qui il numero dell'ordine.
                        </small>

                        @error('order_number')
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
                            for="name"
                        >Nome Prodotto
                        </label>
                        <input
                            class="form-control"
                            id="name"
                            name="name"
                            required
                            type="text"
                            value="{{ old('name', '') }}"
                        />
                        <small
                            class="form-text text-muted"
                            id="name"
                        >
                            Inserisci qui il nome del prodotto.
                        </small>

                        @error('name')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col">
                    <div class="form-outline">
                        <label
                            class="form-label"
                            for="length"
                        >Lunghezza Prodotto
                        </label>
                        <input
                            class="form-control"
                            id="length"
                            name="length"
                            required
                            type="text"
                            value="{{ old('length', '') }}"
                        />
                        <small
                            class="form-text text-muted"
                            id="length"
                        >
                            Inserisci qui la lunghezza del prodotto.
                        </small>

                        @error('length')
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
                            for="width"
                        >Larghezza Prodotto
                        </label>
                        <input
                            class="form-control"
                            id="width"
                            name="width"
                            required
                            type="text"
                            value="{{ old('width', '') }}"
                        />
                        <small
                            class="form-text text-muted"
                            id="width"
                        >
                            Inserisci qui la larghezza del prodotto.
                        </small>

                        @error('width')
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
                            for="height"
                        >Altezza Prodotto
                        </label>
                        <input
                            class="form-control"
                            id="height"
                            name="height"
                            required
                            type="text"
                            value="{{ old('height', '') }}"
                        />
                        <small
                            class="form-text text-muted"
                            id="height"
                        >
                            Inserisci qui l'altezza del prodotto.
                        </small>

                        @error('height')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col">
                    <div class="form-outline">
                        <label
                            class="form-label"
                            for="color"
                        >Colore Prodotto
                        </label>
                        <input
                            class="form-control"
                            id="color"
                            name="color"
                            required
                            type="text"
                            value="{{ ucwords(old('color', '')) }}"
                        >

                        <small
                            class="form-text text-muted"
                            id="length"
                        >
                            Scegli il colore del prodotto.
                        </small>

                        @error('color')
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
                            for="type"
                        >Tipo Prodotto
                        </label>
                        <input
                            class="form-control"
                            id="type"
                            name="type"
                            required
                            type="text"
                            value="{{ ucwords(old('type', '')) }}"
                        >

                        <small
                            class="form-text text-muted"
                            id="type"
                        >
                            Scegli il tipo del prodotto.
                        </small>

                        @error('type')
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
                            for="print"
                        >Stampa Prodotto
                        </label>
                        <input
                            class="form-control"
                            id="print"
                            name="print"
                            required
                            type="text"
                            value="{{ ucwords(old('print', '')) }}"
                        >

                        <small
                            class="form-text text-muted"
                            id="print"
                        >
                            Scegli la stampa del prodotto.
                        </small>

                        @error('print')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-3">
                    <div class="form-outline">
                        <label
                            class="form-label"
                            for="price"
                        >Prezzo
                        </label>
                        <input
                            class="form-control"
                            id="price"
                            name="price"
                            required
                            type="text"
                            value="{{ old('price', '') }}"
                        />
                        <small
                            class="form-text text-muted"
                            id="price"
                        >
                            Inserisci qui il prezzo del prodotto.
                        </small>

                        @error('price')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                </div>
                <div class="col-9">
                    <div class="form-outline">
                        <label
                            class="form-label"
                            for="img"
                        >Immagine Prodotto
                        </label>
                        <input
                            class="form-control"
                            id="img"
                            name="img"
                            required
                            type="text"
                            value="{{ old('img', '') }}"
                        />
                        <small
                            class="form-text text-muted"
                            id="img"
                        >
                            Inserisci qui l'immagine del prodotto.
                        </small>

                        @error('img')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <div class="form-outline">
                        <label
                            class="form-label"
                            for="description"
                        >Descrizione Prodotto
                        </label>
                        <textarea
                            class="form-control"
                            cols="30"
                            id="description"
                            name="description"
                            required
                            rows="10"
                            style="white-space: nowrap !important;"
                            type="text"
                        >value="{{ old('code', '') }}"</textarea>
                        <small
                            class="form-text text-muted"
                            id="description"
                        >
                            Inserisci qui la descrizione del prodotto.
                        </small>

                        @error('description')
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
                    <i class="fa-2x fas fa-download "></i>
                </button>
            </div>

        </div>

    </form>
@endsection
