@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
   <div class="col-md-5">   
      @if (session('success'))
         <div class="alert alert-success alert-dismissible fade show d-flex align-items-center mb-3 py-1" role="alert">
            <i class="ri-checkbox-circle-line pe-2 fs-2"></i>
            <div>{{ session('success') }}</div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
      @endif        
      @if (session('loginError'))
         <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center mb-3 py-1" role="alert">
            <i class="ri-error-warning-line pe-2 fs-2"></i>
            <div>{{ session('loginError') }}</div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
      @endif        
      <main class="form-signin">
         <form action="" method="post">
            @csrf
         <h1 class="h3 mb-3 fw-normal text-center">{{ $title }}</h1>
      
         <div class="form-floating mb-2">
            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" value="{{ old('email') }}" autofocus required>
            <label for="email">Email address</label>
         </div>
         <div class="form-floating mb-2">
            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
            <label for="password">Password</label>
         </div>
      
         <button class="w-100 btn btn-lg btn-primary mb-3" type="submit">{{ $title }}</button>
         </form>
         <small class="d-block text-center">Belum punya akun? <a href="/register">Register</a></small>
      </main>
   </div>
</div>
@endsection