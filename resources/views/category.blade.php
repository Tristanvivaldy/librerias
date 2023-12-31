@extends('layout.main')

@section('container')
    <div class="row">
        @foreach ($categories as $category)
            <div class="col-lg-6 pb-3">
                <div class="card my-3 p-2">
                    <div class="card-body">
                        <h5 class="card-title fs-2 fw-bold">{{ $category->category_name }}</h5>
                        <p class="card-text">{{ $category->category_desc }}</p>
                    </div>
                    {{-- <div class="d-flex justify-content-end">
                    <a class="btn btn-primary w-10" href=""> Show </a>
                </div> --}}
                </div>
            </div>
        @endforeach
    </div>
@endsection
