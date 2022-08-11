@extends('Dashboard.Layouts.main')

@section('container')
    
  <div class="container">
    <div class="row my-4">
      <div class="col-lg-8">
        <h2 class="mb-3">{{ $post->title }}</h2>
        
        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">Edit <span data-feather="edit"></span></a>
        
        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @csrf
                @method('delete')
                
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete
                  <span data-feather="x-circle"></span>
                </button>

                </form>

        <a href="/dashboard/posts" class="btn btn-success">Back to my Posts <span data-feather="arrow-left"></span></a>

        @if ($post->image)
                <div style="max-width: 500px; overflow:hidden;">
                  <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid my-3">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid my-3">
        @endif



        

        <article class="my-3 fs-6">
          {!! $post->body !!}
        </article>

      </div>
    </div>
  </div>


@endsection