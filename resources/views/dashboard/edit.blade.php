@extends('dashboard.layout.main')

@section('content')
    <p class="h1">Edit Books</p>
    <form action="/dashboardsBooks/{{ $book->slug }}" class="mt-4" method="POST">
        @method('put')
        @csrf
        <span id="addon-wrapping">Title</span>
        <div class="input-group flex-nowrap my-3" style="max-width: 100vh;">
            <input type="text" class="form-control border @error('title') is-invalid @enderror" placeholder="Title"
                name="title" aria-describedby="addon-wrapping" value="{{ @old('title', $book->title) }}" required>
        </div>
        @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        <span id="addon-wrapping">Slug</span>
        <div class="input-group flex-nowrap my-3" style="max-width: 100vh;">
            <input type="text" class="form-control border @error('slug') is-invalid @enderror" placeholder="Slug"
                name="slug" aria-describedby="addon-wrapping" value="{{ @old('slug', $book->slug) }}" required>
        </div>
        @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        <span id="addon-wrapping">Category</span>
        <div class="input-group flex-nowrap my-3" style="max-width: 100vh;">
            <select class="form-select @error('category') is-invalid @enderror" name="category_id" required>
                @foreach ($categories as $category)
                    @if (old('category_id', $book->category_id) == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->category_name }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        @error('category')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        <span id="addon-wrapping">Amount</span>
        <div class="input-group flex-nowrap my-3" style="max-width: 100vh;">
            <input type="number" class="form-control border @error('amount') is-invalid @enderror" placeholder="Amount"
                name="amount" aria-describedby="addon-wrapping" value="{{ @old('amount', $book->amount) }}" required>
        </div>
        @error('amount')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control border @error('description') is-invalid @enderror" id="description"
                rows="3">{{ @old('description', $book->description) }}</textarea>
        </div>
        @error('description')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        <button class="btn btn-primary" type="submit">Edit</button>
    </form>
@endsection
