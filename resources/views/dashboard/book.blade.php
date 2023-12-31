@extends('dashboard.layout.main')

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-primary" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <p class="h1">My Books</p>
    <div class="d-flex justify-content-end">
        <a href="/dashboardsBooks/create" class="btn btn-primary my-3 text-light">Create New Book</a>
    </div>
    <p class="divider border border-2"></p>
    @if ($books->count() > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->category->category_name }}</td>
                        <td>{{ $book->amount }}</td>
                        <td>
                            <a class="btn btn-info" href="/dashboardsBooks/{{ $book->slug }}"><i
                                    class="bi bi-eye"></i></a>
                            <a class="btn btn-warning" href="/dashboardsBooks/{{ $book->slug }}/edit"><i
                                    class="bi bi-pencil-fill"></i></a>
                            <form action="/dashboardsBooks/{{ $book->slug }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i
                                        class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="container-lg d-flex fs-1 justify-content-center align-items-center mt-5">
            Sorry, You don't have any Books
        </div>
    @endif
@endsection
