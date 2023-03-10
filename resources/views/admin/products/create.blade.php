@extends('layouts.app')

@section('content')
    <form
        action="{{ route('admin.products.store') }}"
        enctype="multipart/form-data"
        method="post"
    > @csrf @method('POST')

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="form-outline">
                        <label
                            class="form-label"
                            for="code"
                        >Codice
                        </label>
                        <input
                            class="form-control"
                            id="code"
                            name="code"
                            rquired
                            type="number"
                            value="{{ old('code', '') }}"
                        />

                        @error('code')
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

                        @error('name')
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
                            for="length"
                        >Lato Lungo in cm
                        </label>
                        <input
                            class="form-control"
                            id="length"
                            name="length"
                            required
                            type="number"
                            value="{{ old('length', '') }}"
                        />

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
                        >Lato Corto in cm
                        </label>
                        <input
                            class="form-control"
                            id="width"
                            name="width"
                            required
                            type="number"
                            value="{{ old('width', '') }}"
                        />

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
                        >Altezza in cm
                        </label>
                        <input
                            class="form-control"
                            id="height"
                            name="height"
                            required
                            type="number"
                            value="{{ old('height', '') }}"
                        />

                        @error('height')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                </div>
            </div>
            <hr>

            <div class="row align-items-center">
                <div class="col">
                    <div class="form-outline">
                        <label
                            class="form-label"
                            for="color"
                        >Colore Prodotto
                        </label>
                        <select
                            class="form-control"
                            id="color"
                            name="color"
                            required
                        >
                            @foreach ($colors as $color)
                                <option
                                    {{ $color->color == old('color', '') ? 'selected' : '' }}
                                    value="{{ $color->color }}"
                                >
                                    {{ ucwords($color->color) }}
                                </option>
                            @endforeach
                        </select>

                        @error('color')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <div class="form-outline">
                        <label
                            class="form-label"
                            for="print"
                        >Stampa Prodotto
                        </label>
                        <select
                            class="form-control"
                            id="print"
                            name="print"
                            required
                        >
                            @foreach ($prints as $print)
                                <option
                                    {{ $print->print == old('print', '') ? 'selected' : '' }}
                                    value="{{ $print->print }}"
                                >
                                    {{ ucwords($print->print) }}
                                </option>
                            @endforeach

                        </select>

                        @error('print')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                </div>

                <hr>

                <div class="col">
                    <div class="form-outline">
                        <label for="category_id">Categoria</label>
                        <select
                            class="form-control"
                            name="category_id"
                        >
                            @foreach ($categories as $category)
                                <option
                                    {{ $category->id == old('category_id', '') ? 'selected' : '' }}
                                    value="{{ $category->id }}"
                                >{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-outline">
                        <label for="subcategory_id">Sottocategoria</label>
                        <select
                            class="form-control"
                            name="subcategory_id"
                        >
                            @foreach ($subcategories as $subcategory)
                                <option
                                    {{ $subcategory->id == old('subcategory_id', '') ? 'selected' : '' }}
                                    value="{{ $subcategory->id }}"
                                >{{ $subcategory->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

            </div>

            <hr>

            <div class="row">
                <div class="col">
                    <div class="form-outline">
                        <label
                            class="form-label"
                            for="first_price"
                        >Prezzo Scontato Per 100 Unit??
                        </label>
                        <input
                            class="form-control"
                            id="first_price"
                            name="first_price"
                            required
                            type="text"
                            value="{{ old('first_price', '') }}"
                        />

                        @error('first_price')
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
                            for="second_price"
                        >Prezzo Scontato Per 300 Unit??
                        </label>
                        <input
                            class="form-control"
                            id="second_price"
                            name="second_price"
                            required
                            type="text"
                            value="{{ old('second_price', '') }}"
                        />

                        @error('second_price')
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
                            for="third_price"
                        >Prezzo Scontato Per 500 Unit??
                        </label>
                        <input
                            class="form-control"
                            id="third_price"
                            name="third_price"
                            required
                            type="text"
                            value="{{ old('third_price', '') }}"
                        />

                        @error('third_price')
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
                            for="fourth_price"
                        >Prezzo Scontato Per 1000 Unit??
                        </label>
                        <input
                            class="form-control"
                            id="fourth_price"
                            name="fourth_price"
                            required
                            type="text"
                            value="{{ old('fourth_price', '') }}"
                        />

                        @error('fourth_price')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-2">
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

                        @error('price')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <div class="form-outline">
                        <label
                            class="form-label"
                            for="price_saled"
                        >Prezzo Scontato
                        </label>
                        <input
                            class="form-control"
                            id="price_saled"
                            name="price_saled"
                            type="number"
                            value="{{ old('price_saled', '') }}"
                        />

                        @error('price_saled')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                </div>
                <div class="col-2">
                    <div class="form-outline">
                        <label
                            class="form-label"
                            for="quantity"
                        >Quantit??
                        </label>
                        <input
                            class="form-control"
                            id="quantity"
                            name="quantity"
                            required
                            type="text"
                            value="{{ old('quantity', '') }}"
                        />

                        @error('quantity')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <div class="form-outline">
                        <label
                            class="form-label"
                            for="weight"
                        >Peso(kg)
                        </label>
                        <input
                            class="form-control"
                            id="weight"
                            name="weight"
                            required
                            type="text"
                            value="{{ old('weight', '') }}"
                        />

                        @error('weight')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                </div>
                <div class="col-2">
                    <div class="form-outline">
                        <label
                            class="form-label"
                            for="purchasable_in_multi_of"
                        >In Multi Di
                        </label>
                        <select
                            class="form-control"
                            id="purchasable_in_multi_of"
                            name="purchasable_in_multi_of"
                            required
                        >
                            @foreach ($purchasable_in_multi_of as $purchasable_in_multi_of)
                                <option
                                    {{ $purchasable_in_multi_of->purchasable_in_multi_of == old('purchasable_in_multi_of', '') ? 'selected' : '' }}
                                    value="{{ $purchasable_in_multi_of->purchasable_in_multi_of }}"
                                >
                                    {{ ucwords($purchasable_in_multi_of->purchasable_in_multi_of) }}
                                </option>
                            @endforeach
                        </select>

                        @error('purchasable_in_multi_of')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

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

                        @error('img')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col form-outline">
                    <label
                        class="form-label"
                        for="mini_description"
                    >Descrizione Breve
                    </label>
                    <textarea
                        class="form-control"
                        cols="30"
                        id="mini_description"
                        name="mini_description"
                        required
                        rows="4"
                        style="white-space: wrap !important;"
                        type="text"
                    >{{ old('mini_description', '') }}</textarea>

                    @error('mini_description')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror

                </div>
            </div>

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
                            style="white-space: wrap !important;"
                            type="text"
                        >{{ old('description', '') }}</textarea>

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
