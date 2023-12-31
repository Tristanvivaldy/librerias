@extends('dashboard.layout.main')

@section('content')
    <h2>Welcome Back, {{ auth()->user()->name }}</h2>
    <p class="lead"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis suscipit modi corrupti! Similique
        totam laboriosam iusto expedita accusamus? Recusandae tempora illum necessitatibus dolore quod saepe velit vitae
        quo, ducimus in. </p>

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="https://source.unsplash.com/400x350/?a" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Lorem, ipsum dolor.</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, id?</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="https://source.unsplash.com/400x350/?b" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Lorem ipsum dolor sit.</h5>
                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam iusto numquam
                        explicabo!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="https://source.unsplash.com/400x350/?c" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Lorem, ipsum dolor.</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero est earum nobis
                        deleniti amet aliquid?</p>
                </div>
            </div>
        </div>
    </div>
@endsection
