@extends('layout.main')

@section('container')
    <div class="container-login100">
        <div class="wrap-login100">
            <form action="/register" method="post" class="login100-form validate-form">
                @csrf
                <span class="login100-form-title fs-3 text-start mb-3"> <b>Sign up to Librarias</b> </span>

                <div class="input-group mb-4 mt-4">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        placeholder="Name" aria-label="name" aria-describedby="basic-addon1" required>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input-group mb-4">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-vcard"></i></span>
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                        placeholder="Username" aria-label="username" aria-describedby="basic-addon1" required>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input-group mb-4">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        placeholder="Email" aria-label="email" aria-describedby="basic-addon1" required>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="input-group mb-4">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock-fill"></i></span>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                        placeholder="Password" aria-label="password" aria-describedby="basic-addon1" required>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Register
                        </button>
                    </div>
                </div>

                <div class="text-center p-t-10">
                    <span class="txt1">
                        Already have an account?
                    </span>

                    <a class="txt2" href="/session">
                        Sign In
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
