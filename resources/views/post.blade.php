@extends('layouts.main')

@section('container')
   <article class="mt-5">      
      <h2>{{ $post->title }}</h2>
      <h6>By 
         <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
         in 
         <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
      </h6>
      @if ($post->image)
         <div class="overflow-hidden mb-3" style="max-height: 400px;">               
            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid round rounded my-4" alt="{{ $post->category->slug }}">
         </div>
      @else
         <img src="https://source.unsplash.com/1200x400?{{ $post->category->slug }}" class="img-fluid round rounded my-4" alt="{{ $post->category->slug }}">
      @endif
      <article class="fs-5">
         {!! $post->body !!} {{-- Jika di dlmnya mengandung html tag --}}
      </article>
   </article>   
   <a href="/posts" class="btn btn-primary mt-3">
      <i class="ri-arrow-go-back-line text-white"></i>
   </a>
@endsection