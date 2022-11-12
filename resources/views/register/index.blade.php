@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
   <div class="col-lg-5">       
      <main class="form-signin">
         <form action="/register" method="post">
            @csrf
            <h1 class="h3 mb-3 fw-normal text-center">{{ $title }}</h1>
         
            <div class="form-floating mb-2">
               <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama" name="name" value="{{ old('name') }}" autofocus required>
               <label for="name">Nama</label>
               @error('name')
                  <div class="invalid-feedback">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-floating mb-2">
               <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" name="username" value="{{ old('username') }}" required>
               <label for="username">Username</label>
               @error('username')
                  <div class="invalid-feedback">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-floating mb-2">
               <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" value="{{ old('email') }}" required>
               <label for="email">Email</label>
               @error('email')
                  <div class="invalid-feedback">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-floating mb-2">
               <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required>
               <label for="password">Password</label>
               @error('password')
                  <div class="invalid-feedback">{{ $message }}</div>
               @enderror
            </div>
         
            <button class="w-100 btn btn-lg btn-primary mb-3" type="submit">{{ $title }}</button>
         </form>
         <small class="d-block text-center">Sudah punya akun? <a href="/login">Login</a></small>
      </main>
   </div>
</div>
@endsection