<nav class="navbar navbar-expand-lg navbar-dark" style="background-image: linear-gradient( 135deg, #3B2667 10%, #BC78EC 100%);">
   <div class="container-fluid mx-5">
     <a class="navbar-brand" href="/">
       <img src="/img/logo.png" class="w-50 rounded" alt="logo">
     </a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNav">
       <ul class="navbar-nav">
         <li class="nav-item">
           <a class="nav-link {{ ($active == 'Home') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
         </li>
         <li class="nav-item">
           <a class="nav-link {{ ($active == 'posts') ? 'active' : '' }}" href="/posts">Blog</a>
         </li>
         <li class="nav-item">
           <a class="nav-link {{ ($active == 'categories') ? 'active' : '' }}" href="/categories">Categories</a>
         </li>
         <li class="nav-item">
           <a class="nav-link {{ ($active == 'about') ? 'active' : '' }}" href="/about">About</a>
         </li>
       </ul>
       <ul class="navbar-nav ms-auto">               
        @auth
          <li class="nav-item">
            <div class="dropdown user-dropdown">
              <a href="#"id="user-toggle" class="d-flex align-items-center text-white text-decoration-none" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="bg-primary bg-gradient rounded-circle" style="padding: 0.1em 0.425em"><i class="ri-user-3-fill fs-5"></i></div>
                <div class="d-none d-sm-block ms-2">
                  <span class="h6">{{ auth()->user()->name }}</span>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow mt-1" style="border-radius: .4375rem;" data-bs-popper="none">
                <div class="dropdown-header">
                  <span class="d-block text-sm text-muted">Welcome!</span>
                </div>
                <a class="dropdown-item" href="#">
                  <i class="ri-user-3-line position-relative me-3"></i>Profile 
                </a>
                <a class="dropdown-item" href="/dashboard">
                  <i class="ri-dashboard-line position-relative me-3"></i>Dashboard
                </a>
              <div class="dropdown-divider"></div>
              
              <form action="/logout" method="post">
                @csrf                  
                <button class="dropdown-item" href="#">
                  <i class="ri-logout-box-r-line position-relative me-3"></i>Logout 
                </button>
              </form>
            </div>
            </div>
          </li>
        @else
          <li class="nav-item">
            <a href="/login" class="nav-link text-white px-3 py-1 d-flex justify-content-center {{ ($active == 'login' || 'register') ? 'active' : '' }}">
              <i class="ri-login-box-line pe-1"></i>Login
            </a>
          </li>        
        @endauth   
       </ul>
     </div>
   </div>
</nav>