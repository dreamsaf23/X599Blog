@extends('Layouts/main')

@section('container')

    <h2 class="mb-3">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts">

                @if(request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                
                @if(request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
                @endif

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Mau cari apaa ..?" name="search" value="{{ request('search') }}">
                <button class="btn btn-outline-primary" type="submit">Cari</button>
            </div>
            </form>
        </div>
    </div>

    @if ($posts->count())




    <div class="card mb-5">
        
    @if ($posts[0]->image)
            <div style="max-width: 500px; overflow:hidden;">
            <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">
                </div>
    @else
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
    @endif


    <div class="card-body">
    <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
    <p>
        <small class="text-muted">
            <a class="text-decoration-none" href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a class="text-decoration-none" href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> - {{ $posts[0]->created_at->diffForHumans() }}</small></p>
    <p class="card-text">{{ $posts[0]->excerpt }}</p>

    <a class="text-decoration-none btn btn-primary" href="/posts/{{ $posts[0]->slug }}">Read more</a>
    </div>
    </div>
    

    <div class="container">
        <div class="row">
            @foreach( $posts->skip(1) as $post)
            <div class="col-md-4 mb-4">
                <div class="card">
                <span class="position-absolute badge text-bg-primary">{{ $post->category->name }}</span>
                
                @if ($post->image)
                    
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                        
                @else
                    <img src="https://source.unsplash.com/500x300?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                @endif
                
                
                <div class="card-body">


                <h5 class="card-title">
                    <a class="text-decoration-none text-dark" href="/posts/{{ $post->slug }}">
                    {{ $post->title }}</a></h5>
            <p>
                <small class="text-muted">
                <a class="text-decoration-none" href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> - {{ $post->created_at->diffForHumans() }}</small></p>
                <p class="card-text">{{ $post->excerpt }}</p>
                <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

        @else
        <div class="row justify-content-center mb-3">
        <div class="col-md-6">
        <div class="alert alert-danger" role="alert">
        Ooopps... Not post found.
        </div>
        </div>
        </div>
        @endif

        {{ $posts->links() }}


    

@endsection
