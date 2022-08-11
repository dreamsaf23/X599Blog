@extends('Layouts.main')

@section('container')
    <h1 class="h3 my-5 fw-normal text-center">Please {{ $title }}</h1>

    <div class="row justify-content-center">
      <div class="col-lg-5">

      <main class="form-registration w-100 m-auto">
        <form action="/register" method="POST" class="mb-2">
          @csrf
      
          <div class="form-floating mb-2">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="name" placeholder="Name" required>
            <label for="name">Name</label>

            @error('name')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror

          </div>
          
          <div class="form-floating mb-2">
            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" id="username" placeholder="Username" required>
            <label for="username">Username</label>

            @error('username')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror

          </div>

          <div class="form-floating mb-2">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" placeholder="name@example.com" required>
            <label for="email">Email address</label>

            @error('email')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror

          </div>

          <div class="form-floating mb-5">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
            <label for="password">Password</label>

            @error('password')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
            @enderror

          </div>
      
          <button class="w-100 btn btn-lg btn-primary" type="submit">{{ $title }}</button>
        </form>
        <small>All ready registered? <a class="text-decoration-none" href="/login">Login Now!</a></small>
      </main>

      </div>
    </div>


@endsection