@extends('layouts.main')

@section('container')
   <h1 class="text-center">{{ $title }}</h1>

   <div class="row my-5 d-flex justify-content-center">
      <div class="col-md-6">
         <form action="/posts">
         @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
         @elseif(request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
         @endif
            <div class="input-group mb-3">
               <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
               <button class="btn btn-outline-primary" type="submit">
                  <i class="ri-search-2-line"></i>
               </button>
             </div>
         </form>
      </div>
   </div>

   @if ($posts->count())
      <div class="card my-5 text-center h-25">
         @if ($posts[0]->image)
            <div class="overflow-hidden mb-3" style="max-height: 400px;">               
               <img src="{{ asset('storage/' . $posts[0]->image) }}" class="img-fluid round rounded" alt="{{ $posts[0]->category->slug }}">
            </div>
         @else
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->slug }}" class="img-fluid round rounded" alt="{{ $posts[0]->category->slug }}">
         @endif

         <div class="card-body">
         <h5 class="card-title">
            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-reset">{{ $posts[0]->title }}</a>
            </h5>        
         <p class="card-text">
            <small class="text-muted">By. 
               <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a>
               in 
               <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a>
               {{ $posts[0]->created_at->diffForHumans() }}</small>
            </p>
         <p class="card-text">{{ $posts[0]->excerpt }}</p>
         <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary pb-2">Read More</a>
         </div>
      </div>     
   
      <div class="row">
      @foreach ($posts->skip(1) as $post)  
         <div class="col col-md-4 mb-4 d-flex">
            <div class="card">
               <div class="badge bg-secondary text-light position-absolute p-2 m-2 bg-opacity-75">
                  <a href="/posts?category={{ $post->category->slug }}" class='text-reset text-decoration-none'>{{ $post->category->name }}</a>
               </div>
               @if ($post->image)
                  <div class="overflow-hidden mb-3" style="max-height: 400px;">               
                     <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid round rounded" alt="{{ $post->category->slug }}">
                  </div>
               @else
                  <img src="https://source.unsplash.com/1200x400?{{ $post->category->slug }}" class="img-fluid round rounded" alt="{{ $post->category->slug }}">
               @endif
               <div class="card-body">
                  <h5 class="card-title">
                     <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-reset">{{ $post->title }}</a>
                  </h5>     
                  <p class="card-text">
                     <small class="text-muted">By. 
                        <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
                        in 
                        <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
                        {{ $post->created_at->diffForHumans() }}</small>
                  </p>
                  <p class="card-text">{{ $post->excerpt }}</p>
               </div>
               <div class="card-footer bg-transparent border-top-0 mb-3 mx-auto">                  
                  <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
               </div>
            </div>
         </div>      
      @endforeach
      </div>

   @else
      <p class="fs-3 text-center">Post not found</p>       
   @endif

   {{-- Pagination --}}
   <div class="d-flex justify-content-center my-5">
      {{ $posts->links(); }}
   </div>
@endsection