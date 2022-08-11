@extends('Layouts/main')

@section('container')

  <h1>Halaman About</h1>
  <h3>{{ $name }}</h3>
  <p>{{ $email }}</p>
  <img src="img/{{ $image }}" alt="Profile" width="100">

@endsection