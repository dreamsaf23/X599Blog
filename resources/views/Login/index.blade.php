@extends('Layouts.main')

@section('container')
    <h1 class="h3 my-5 fw-normal text-center">Please {{ $title }}</h1>

    

    <div class="row justify-content-center">
      <div class="col-md-4">

        @if(session()->has('success'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
        @endif
        
        @if(session()->has('loginError'))

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
        @endif

      <main class="form-signin w-100 m-auto">
        <form action="/login" method="post" class="mb-2">
          @csrf
      
          <div class="form-floating mb-2">
            <input type="username" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required autofocus>
            <label for="username">Username</label>

            @error('username')

            <div class="invalid-feedback">
              {{ $message }}
            </div>

            @enderror

          </div>

          <div class="form-floating mb-5">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="Password" placeholder="Password" required>
            <label for="Password">Password</label>

            @error('password')

            <div class="invalid-feedback">
              {{ $message }}
            </div>

            @enderror

          </div>
      
          <button class="w-100 btn btn-lg btn-primary" type="submit">{{ $title }}</button>
        </form>
        <small>Not registered? <a class="text-decoration-none" href="/register">Register Now!</a></small>
      </main>

      </div>
    </div>


@endsection