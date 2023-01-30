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
            <div class="col-12 m-5 text-center">

                <div class="HeaderBoxes">
                    <nav class="d-flex">
                        <div class="container d-flex flex-wrap justify-content-around">
                            <div class="card d-flex align-items-center position-relative {{ $category->color }}">
                                <img
                                    alt="img"
                                    class="card-img-top"
                                    src="{{ $category->img }}"
                                />
                                <div class="litlogo position-absolute">
                                    <img
                                        alt="img2"
                                        class="img-fluid"
                                        src="{{ $category->img2 }}"
                                    />
                                </div>

                                <div class="card-body text-center p-1">
                                    <span class="card-title">SCATOLE</span>
                                    <br>
                                    <span class="card-text font-weight-bold">{{ $category->name }}</span>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>

                @if ($category->products->count() > 0)
                    <div class="row justify-content-center row-cols-1 row-cols-md-4 g-2">
                        @foreach ($category->products as $product)
                            <div class="col">
                                <div class="card my-4">
                                    <img
                                        alt="Hollywood Sign on The Hill"
                                        class="card-img-top"
                                        src="https://pngimg.com/d/box_PNG84.png"
                                    />
                                    <div class="card-body">
                                        <h1 class="card-title fw-bold">{{ $product->name }}</h1>

                                        <div class="badge badge-pill px-3 py-2 rounded-pill badge-dark">
                                            {{ $product->category->name }}
                                        </div>
                                        <div class="badge badge-pill px-3 py-2 rounded-pill badge-dark">
                                            {{ $product->subcategory->name }}
                                        </div>

                                        <p class="card-title fw-bold small p-2 text-muted">CODICE: {{ $product->code }}</p>

                                        <div>
                                            <div class="badge">

                                                @if ($product->price_saled)
                                                    <del> <i class="fas fa-tag mr-2"></i>€{{ $product->price }}</del>
                                                @else
                                                    <i class="fas fa-tag mr-2"></i>€{{ $product->price }}
                                                @endif

                                            </div>

                                            <div class="badge text-danger">

                                                @if ($product->price_saled)
                                                    <i class="fas fa-tag mr-2 "></i>
                                                    €<span class="">{{ $product->price_saled }}</span>
                                                @endif
                                            </div>

                                            <div class="badge">
                                                <i class="fas fa-box mr-2"></i>{{ $product->quantity }}

                                            </div>

                                        </div>

                                        <p class="card-text">
                                            {{ $product->mini_description }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <h1>No Products For This category</h1>
                @endif

                {{-- @if ($category->products->count() > 0)
                    <table>
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category->products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->pivot->quantity }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <h1>No Products For This category</h1>
                @endif --}}

            </div>
            <a
                class="btn btn-sm btn-primary rounded-circle btn-floating"
                href="{{ route('admin.categories.edit', $category->id) }}"
            ><i class="fas fa-edit"></i></a>
        </div>

    </div>
@endsection
