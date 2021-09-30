@extends('layout.main')
@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form action="/register" method="post">
                @csrf
                <div class="form-floating">
                    <input type="name" name="name" class="form-control mt-2 mb-2 @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name')}}">
                    <label for="name">Name</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="username" name="username" class="form-control mt-2 mb-2  @error('username') is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username')}}">
                    <label for="username">Username</label>
                    @error('username')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control mt-2 mb-2  @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email')}}">
                    <label for="email">Email Address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Login</button>
            </form>
            <small class="d-block text-center mt-3">Registered?<a href="/login">Please Login!</small>
        </main>
    </div>
</div>


@endsection