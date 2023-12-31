@extends('layout.main')

@section('carousel')
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/1200x400/?library" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1200x400/?libraries" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1200x400/?librarian" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection
@section('container')
    <div class="p-5">
        <div class="row justify-content-start mt-5">
            <div class="col-4 fw-bold fs-1">LIBRARIAS
                <p class="mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, a ea nostrum reiciendis
                    eveniet
                    optio nihil repudiandae rerum voluptate minus autem corrupti esse ipsa. Cum sed excepturi, perspiciatis
                    minus eaque cumque ab mollitia corrupti, sint id magnam, sequi earum quaerat architecto? Dignissimos,
                    qui!
                    Libero aut harum, excepturi pariatur reiciendis doloribus?</p>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-4 fw-bold fs-1">BOOKS
                <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda optio dicta quas esse
                    fuga
                    eaque facere sapiente, nihil dolorem earum? Rem asperiores voluptates dolorum quaerat nesciunt eum vel,
                    magnam ipsum exercitationem sapiente expedita aut consequuntur velit corrupti ab neque laboriosam
                    doloremque
                    obcaecati! Laborum sint ipsum veniam debitis. Magnam, distinctio quaerat?</p>
            </div>
        </div>
        <div class="row justify-content-start">
            <div class="col-4 fw-bold fs-1">KNOWLEDGE
                <p class="mt-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur neque tenetur
                    explicabo accusamus hic maxime cumque esse dolorum voluptatibus nisi corporis, deleniti perferendis
                    delectus commodi tempore beatae veritatis obcaecati sint.</p>
            </div>
        </div>
        <div class="row justify-content-end mb-5">
            <div class="col-4 fw-bold fs-1">INFORMATION
                <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero incidunt suscipit
                    similique explicabo corporis non perspiciatis cum nihil laboriosam porro.</p>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <div class="card text-bg-dark rounded-0 p-2">
        <div class="card-header">&copy; Librarias </div>
        <div class="card-body">
            <h5 class="card-title"> <i> Libraries store the energy that fuels the imagination. They open up windows to the
                    world and inspire us to explore and achieve, and contribute to improving our quality of life.</i>
            </h5>
            <p class="card-text">- Sidney Sheldon</p>
        </div>
    </div>
@endsection
