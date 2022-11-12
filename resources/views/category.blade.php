@extends('layouts.main')

@section('container')
   <h3 class="text-center">{{ $title }}</h3>
   <div class="card-group my-5">
   @foreach ($posts as $post)
      <div class="card border rounded border-primary me-3">
         <img src="https://images.unsplash.com/photo-1475924156734-496f6cac6ec1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8" class="card-img-top" class="h-25" alt="Thumbnail">
         <div class="card-body">
            <a href="../posts/{{ $post->slug }}" class="text-decoration-none text-reset">
               <h5 class="card-title">{{ $post->title }}</h5>
            </a>            
            <h6>By 
               <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
               in 
               <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
            </h6>
            <p class="card-text">{{ $post->excerpt }}</p>
         </div>
         <div class="card-footer">
            <a href="../posts/{{ $post->slug }}">
               <button class="btn btn-primary">Selengkapnya</button>
            </a>
         </div>
      </div>
   @endforeach
   </div>
@endsection