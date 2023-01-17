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
                        <a
                            class="postcard__img_link"
                            href="#"
                        >
                            <img
                                alt="Image Title"
                                class="postcard__img"
                                src="https://blog.myurls.bio/wp-content/uploads/2021/05/Artboard-50-300x300.png"
                            />
                        </a>
                        <div class="postcard__text">
                            <h1 class="postcard__title blue"><a href="{{-- {{ route('admin.users.show', $user->user->id) }} --}}">{{ $user->name }}</a>
                            </h1>
                            <div class="postcard__subtitle small">
                                <time datetime="2020-05-25 12:00:00">
                                    <i class="fas fa-calendar-alt mr-2"></i>{{ $user->updated_at }}
                                </time>
                            </div>
                            <div class="postcard__bar"></div>
                            <div class="postcard__preview-txt"><span class="text-muted">EMAIL:</span>
                                {{ ucwords($user->email) }}</div>
                            <div class="postcard__preview-txt"><span class="text-muted">ADDRESS:</span>
                                {{ ucwords($user->userdetail->address) }}</div>
                            <div class="postcard__preview-txt"><span class="text-muted">PHONE:</span>
                                {{ ucwords($user->userDetail->phone) }}</div>
                            <ul class="postcard__tagbox">
                                <li class="tag__item"><i
                                        class="fas fa-user mr-2"></i>{{ ucwords($user->roles->first()->name) }}</li>
                            </ul>
                        </div>
                    </article>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
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
