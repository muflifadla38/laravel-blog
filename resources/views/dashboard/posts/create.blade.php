@extends('dashboard.layouts.main')

@section('main-wrapper')
<div class="col-lg-8">
   <h2 class="mb-3">Create Post</h2>
   <form action="/dashboard/posts" method="post" class="mb-5" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
         <label for="title" class="form-label">Title</label>
         <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" placeholder="Post title" autofocus required>
         @error('title')
            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
         @enderror
      </div>
      <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}" placeholder="Slug" required>
          @error('slug')
             <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
          @enderror
      </div>
      <div class="mb-3">
         <label for="category_id" class="form-label">Category</label>
         <select id="category_id" class="form-select" name="category_id" value="{{ old('category_id') }}">
         @foreach ($category as $category)
            @if (old('category_id') == $category->id)
            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>               
            @else
            <option value="{{ $category->id }}">{{ $category->name }}</option>               
            @endif
         @endforeach
         </select>
      </div>
      <div class="mb-3">
         <label for="image" class="form-label">Post Image</label>
         <img src="" class="img-preview img-fluid mb-3 col-sm-5">
         <input class="form-control form-control-sm @error('body') is-invalid @enderror" id="image"name="image" type="file" onchange="previewImage()">
         @error('image')
            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
         @enderror
      </div>
      <div class="mb-3">
         <label for="body" class="form-label">Body</label>
         <input id="body" class="@error('body') is-invalid @enderror" value="{{ old('body') }}" type="hidden" name="body">
         <trix-editor input="body"></trix-editor>         
         @error('body')
            <div class="invalid-feedback"><strong>{{ $message }}</strong></div>
         @enderror
      </div>

      <button type="submit" class="btn btn-primary">
         <i data-feather="save"></i>
      </button>
   </form>
</div>

<script>
   const title = document.querySelector('#title');
   const slug = document.querySelector('#slug');

   title.addEventListener('change', function() {
      fetch('/dashboard/posts/checkSlug?title=' + title.value)
         .then(response => response.json())
         .then(data => slug.value = data.slug)
   });

   document.addEventListener('trix-file-accept', function(e) {
      e.preventDefault();
   });

   function previewImage() {
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const reader = new FileReader();
      reader.readAsDataURL(image.files[0]);

      reader.onload = function(e) {
         imgPreview.src = e.target.result;
      }
   }
</script>
@endsection