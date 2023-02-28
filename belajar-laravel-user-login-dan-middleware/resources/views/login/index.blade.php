@extends('layouts/main')

@section('container')
  <div class="row justify-content-center">
      <div class="col-lg-4">
          @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          @if (session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          <main class="form-signin w-100 m-auto">
          <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
            <form action="/login" method="POST">
              @csrf

              <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required name="email" value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                  <div class="text-danger">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              
              <div class="form-floating">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required placeholder="Password">
                <label for="password">Password</label>
                @error('password')
                  <div class="text-danger">
                    {{ $message }}
                  </div>
                @enderror
              </div>
          
              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
            </form>
              <small class="text-center d-block mt-3">Not registered? <a href="/register">Register Now!</a></small>
          </main>
      </div>
  </div>
@endsection