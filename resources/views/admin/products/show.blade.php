@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">

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

                <section class="dark">

                    <article class="postcard dark blue">

                        @if (filter_var($product->img, FILTER_VALIDATE_URL))
                            <img
                                alt="standard"
                                class="postcard__img"
                                src="{{ $product->img }} "
                            />
                        @else
                            <img
                                alt="local"
                                class="postcard__img"
                                src="{{ Storage::url($product->img) }}"
                            />
                        @endif

                        <div class="postcard__text">
                            <h1 class="postcard__title blue"><a href="{{-- {{ route('admin.products.show', $product->user->id) }} --}}">{{ $product->name }}</a>
                            </h1>
                            <div class="postcard__subtitle small">
                                <time datetime="2020-05-25 12:00:00">
                                    <i class="fas fa-calendar-alt mr-2"></i>{{ $product->updated_at }}
                                </time>
                            </div>
                            <div class="postcard__bar"></div>

                            <div class="postcard__preview-txt h6 small"><span class="text-muted">CODICE:</span>
                                {{ $product->code }}</div>
                            <div class="postcard__preview-txt h6 small"><span class="text-muted">CATEGORIA:</span>
                                {{ $product->category->name }}</div>
                            <div class="postcard__preview-txt h6 small"><span class="text-muted">SOTTOCATEGORIA:</span>
                                {{ $product->subcategory->name }}</div>
                            <div class="postcard__preview-txt h6 small"><span class="text-muted">PESO:</span>
                                {{ $product->weight }}kg</div>
                            <div class="postcard__preview-txt h6 small"><span class="text-muted">COLORE:</span>
                                {{ ucwords($product->color) }}</div>
                            <div class="postcard__preview-txt h6 small"><span class="text-muted">STAMPA:</span>
                                {{ ucwords($product->print) }}</div>

                            <ul class="postcard__tagbox">
                                <li class="tag__item"><i class="fas fa-tag mr-2"></i>€{{ $product->price }}</li>

                                @if ($product->price_saled)
                                    <li class="tag__item bg-danger"><i class="fas fa-tag mr-2 "></i>
                                        €{{ $product->price_saled }}
                                @endif
                                </li>
                                <li class="tag__item"><i class="fas fa-box mr-2"></i>{{ $product->quantity }}</li>
                            </ul>
                        </div>
                    </article>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">

                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th>Acquistabile in multi di</th>
                            <th>Lato Lungo</th>
                            <th>Lato Corto</th>
                            <th>Altezza</th>
                            <th>Prezzo scontato per 100 unità</th>
                            <th>Prezzo scontato per 300 unità</th>
                            <th>Prezzo scontato per 500 unità</th>
                            <th>Prezzo scontato per 1000 unità</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{ $product->purchasable_in_multi_of }}</th>
                            <td>{{ $product->length }}cm</td>
                            <td>{{ $product->width }}cm</td>
                            <td>{{ $product->height }}cm</td>
                            <td>€{{ $product->first_price }}</td>
                            <td>€{{ $product->second_price }}</td>
                            <td>€{{ $product->third_price }}</td>
                            <td>€{{ $product->fourth_price }}</td>
                        </tr>

                    </tbody>
                </table>

                <div class="text-center row">

                    <div class="card col-12 my-4 px-5">
                        <div class="card-body">
                            <h2 class="text-muted">Descrizione</h2>
                            <p class="card-text">{{ $product->description }}</p>
                        </div>
                    </div>

                    <div class="card col-12 my-4 px-5">
                        <div class="card-body">
                            <h2 class="text-muted">Descrizione Breve</h2>
                            <p class="card-text">{{ $product->mini_description }}</p>
                        </div>
                    </div>

                </div>

                <a
                    class="btn btn-sm btn-primary btn-floating rounded-circle"
                    href="{{ route('admin.products.edit', $product->id) }}"
                ><i class="fa fas fa-edit "></i></a>
                <form
                    action="{{ route('admin.products.destroy', $product->id) }}"
                    class="d-inline"
                    method="POST"
                >
                    @csrf
                    @method('DELETE')

                    <button
                        class="btn btn-sm btn-danger btn-floating rounded-circle"
                        type="submit"
                    >
                        <i class="fa fas fa-trash "></i>
                    </button>
                </form>

            </div>
        </div>
    </div>
@endsection
