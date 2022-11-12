@extends('dashboard.layouts.main')

@section('main-wrapper') 
<div class="container">
   <div class="row mb-5">
      <div class="col-lg-8">
         <article class="mb-5">             
            <div class="action mb-4">
               <a href="/dashboard/posts" class="badge bg-primary me-2"><i data-feather="arrow-left"></i></a>
               <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-success"><i data-feather="edit"></i></a>
               <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                  @method('DELETE')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Yakin Hapus Postingan ?')"><i data-feather="trash"></i></button>
               </form>
            </div>
            <h2>{{ $post->title }}</h2>    
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
      </div>
   </div>
</div>
@endsection