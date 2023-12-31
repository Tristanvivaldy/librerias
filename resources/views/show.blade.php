@extends('layout.main')

@section('container')
    <div class="col-lg-8 ms-auto me-auto">
        <div class="card mb-3">
            <img src="https://source.unsplash.com/400x300/?{{ $book->category->category_name }}" class="card-img-top"
                alt="{{ $book->category->category_name }}">
            <div class="card-body">
                <h5 class="card-title fw-bold">{{ $book->title }}</h5>
                <p class="mb-4"> By. {{ $book->user->name }}</p>
                <p class="card-text fst-italic mb-3">Amount : <b>{{ $book->amount }}</b></p>
                <p class="card-text">{{ $book->description }}.</p>
                <a href="{{ url()->previous() }}">Back</a>
            </div>
        </div>
    </div>
@endsection
