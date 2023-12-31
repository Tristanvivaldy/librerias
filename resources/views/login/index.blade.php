@extends('layout.main')

@section('container')
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if (session()->has('loginError'))
        <div class="alert alert-danger" role="alert">
            {{ session('loginError') }}
        </div>
    @endif
    <div class="container-login100">
        <div class="wrap-login100">
            <form action="/session" method="post" class="login100-form validate-form">
                @csrf
                <span class="login100-form-title fs-3 text-start mb-5"> <b>Sign in to Librarias</b> </span>

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
                            Login
                        </button>
                    </div>
                </div>

                <div class="text-center p-t-115">
                    <span class="txt1">
                        Don't have an account?
                    </span>

                    <a class="txt2" href="/register">
                        Sign Up
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
