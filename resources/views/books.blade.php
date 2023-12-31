@extends('layout.main')

@section('container')
    @if ($books->count() > 0)
        <div class="row">
            @foreach ($books as $book)
                <div class="col-lg-6 mt-4 pb-4">
                    <div class="card" style="width: 35rem;">
                        <div class="position-absolute rounded-1 text-white fw-bold fs-6 px-4 py-2 bg-info">
                            {{ $book->category->category_name }}
                        </div>
                        <img src="https://source.unsplash.com/400x300/?{{ $book->category->category_name }}"
                            class="card-img-top" alt="{{ $book->category->category_name }}">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $book->title }}</h5>
                            <p class="mb-4"> By. {{ $book->user->name }}</p>
                            <p class="card-text mb-4">{{ $book->description }}</p>
                            <p class="card-text fst-italic mb-3">Amount : <b>{{ $book->amount }}</b></p>
                            <div class="d-flex justify-content-end">
                                <a href="/books/{{ $book->slug }}" class="btn btn-primary">Details</a>
                            </div>
                            <p class="card-text"><small
                                    class="text-body-secondary">{{ $book->created_at->diffForHumans() }}</small></p>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pb-4">
            {{ $books->links() }}
        </div>
    @else
        <div class="container-lg d-flex fs-2 justify-content-center align-items-center">
            Sorry, We don't have any Books right now.
        </div>
    @endif
@endsection
