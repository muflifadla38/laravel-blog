@extends('layouts.main')

@section('container')
   <h3 class="text-center">{{ $title }}</h3>
   <div class="container mt-5">
      <div class="row">         
      @foreach ($category as $category)
         <div class="col-md-4">            
            <a href="/posts?category={{ $category->slug }}" class="text-decoration-none text-white">
               <div class="card border rounded border-primary me-3">
                  <img src="https://source.unsplash.com/500x400?{{ $category->slug }}" alt="{{ $category->name }}">
                  <div class="card-img-overlay d-flex align-items-center p-0">
                     <h5 class="card-title text-center text-light flex-fill bg-dark bg-opacity-75 p-3">{{ $category->name }}</h5> 
                  </div>
               </div>  
            </a>          
         </div>
      @endforeach
      </div>
   </div>
@endsection