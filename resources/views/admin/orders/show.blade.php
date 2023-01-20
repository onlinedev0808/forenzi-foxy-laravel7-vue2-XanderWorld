@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row  justify-content-center">
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
                        <a
                            class="postcard__img_link"
                            href="#"
                        >
                            <img
                                alt="Image Title"
                                class="postcard__img"
                                src="https://cdn0.iconfinder.com/data/icons/minimal-shop/256/minimal_shop_11-512.png"
                            />
                        </a>
                        <div class="postcard__text">
                            <h1 class="postcard__title blue"><a href="{{-- {{ route('admin.orders.show', $order->user->id) }} --}}">{{ $order->user->name }}
                                    {{ $order->user->userDetail->surname }}</a>
                            </h1>
                            <div class="postcard__subtitle small">
                                <time datetime="2020-05-25 12:00:00">
                                    <i class="fas fa-calendar-alt mr-2"></i>{{ $order->order_date }}
                                </time>
                            </div>
                            <div class="postcard__bar"></div>

                            <div class="postcard__preview-txt h6 small"><span class="text-muted">INDIRIZZO:</span>
                                {{ $order->user->userDetail->address }}</div>
                            <div class="postcard__preview-txt h6 small"><span class="text-muted">TELEFONO:</span>
                                {{ $order->user->userDetail->phone }}</div>
                            <div class="postcard__preview-txt h6 small"><span class="text-muted">EMAIL:</span>
                                {{ $order->user->email }}</div>

                            <ul class="postcard__tagbox">
                                <li class="tag__item"><i class="fas fa-tag mr-2"></i>€{{ $order->total }}</li>
                                <li
                                    class="tag__item"
                                    style="
                                        @if ($order->status == 'consegnato') background-color: #005c00;
                                        @elseif($order->status == 'annullato') 
                                            background-color: #8b0000;
                                        @elseif($order->status == 'spedito') 
                                            background-color: #000066;
                                        @elseif($order->status == 'in attesa') 
                                            background-color: #cccc00; @endif"
                                ><i class="fas fa-bus-alt mr-2"></i>{{ $order->status }}</li>
                                {{-- <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
                                <li class="tag__item play blue">
                                    <a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
                                </li> --}}
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
                            <th>Utente</th>
                            <th>Ragione Sociale</th>
                            <th>Cap</th>
                            <th>Città</th>
                            <th>Provincia</th>
                            <th>Stato</th>
                            <th>Pec</th>
                            <th>Codice Sdi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{ $order->user->userDetail->id }}</th>
                            <td>{{ $order->user->userDetail->business_name }}</td>
                            <td>{{ $order->user->userDetail->cap }}</td>
                            <td>{{ $order->user->userDetail->city }}</td>
                            <td>{{ $order->user->userDetail->province }}</td>
                            <td>{{ $order->user->userDetail->state }}</td>
                            <td>{{ $order->user->userDetail->pec }}</td>
                            <td>{{ $order->user->userDetail->code_sdi }}</td>
                        </tr>

                    </tbody>
                </table>

                <div class="card col-12 my-4 px-5">
                    <div class="card-body ">
                        <h2 class="text-muted">Note</h2>
                        <p class="card-text">{{ $order->user->userDetail->notes }}</p>
                    </div>
                </div>

                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th>Ordine</th>
                            <th>Numero</th>
                            <th>Spedizione</th>
                            <th>Conai</th>
                            <th>Iva</th>
                            <th>Subtotale</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{ $order->id }}</th>
                            <td>{{ $order->order_number }}</td>
                            <td>{{ $order->shipping_cost }}</td>
                            <td>{{ $order->conai }}</td>
                            <td>{{ $order->iva }}</td>
                            <td>{{ $order->subtotal }}</td>
                        </tr>
                    </tbody>
                </table>

                <div class="wonder">
                    <h5>L'utente</h5>
                    <h5><span>Paga</span>Con<span>{{ $order->payment->payment_method }}</span></h5>
                    <div class="h6">
                        <div class="badge badge-pill bg-primary">{{ $order->payment->payment_status }}</div>
                    </div>
                </div>

                @if ($order->products->count() > 0)
                    <div class="row justify-content-center row-cols-1 row-cols-md-2 g-4">
                        @foreach ($order->products as $product)
                            <div class="col">
                                <div class="card my-4">
                                    <img
                                        alt="Hollywood Sign on The Hill"
                                        class="card-img-top"
                                        src="{{ $product->img }}"
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
                    <h1>No Products For This Order</h1>
                @endif

            </div>
        </div>

        <div class="text-center">

            <a
                class="btn btn-sm btn-primary rounded-circle btn-floating"
                href="{{ route('admin.orders.edit', $order->id) }}"
            ><i class="fas fa-edit"></i></a>
            <form
                action="{{ route('admin.orders.destroy', $order->id) }}"
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
        </div>

    </div>
@endsection
