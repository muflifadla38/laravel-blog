<a class="logo" href="/dashboard">Jappa</a>
<ul class="list-unstyled accordion-menu">
   <li class="{{ Request::is('dashboard') ? 'active-page' : '' }}">
      <a href="/dashboard" class="{{ Request::is('dashboard') ? 'active' : '' }}">
         <i data-feather="home"></i>Dashboard
      </a>
      <ul class="">
      <li class="dropdown-header d-none d-md-block"><h6 class="text-uppercase mb-0">Dashboard</h6></li>
      <li><a href="/dashboard" class="{{ Request::is('dashboard') ? 'active' : '' }}">Dashboard</a></li>
      <li><a href="/" class="">Homepage</a></li>
      </ul>
   </li>
   <li class="{{ Request::is('dashboard/posts*') ? 'active-page' : '' }}">
      <a href="/dashboard/posts" class="{{ Request::is('dashboard/posts') ? 'active' : '' }}">
         <i data-feather="file-text"></i>Posts
         <i class="fas fa-chevron-right dropdown-icon"></i>
      </a>
      <ul class="">
         <li class="dropdown-header d-none d-md-block ">
            <h6 class="text-uppercase mb-0">Posts</h6>
         </li>
         <li>
            <a href="/dashboard/posts" class="{{ Request::is('dashboard/posts') ? 'active' : '' }}">My Posts</a>
         </li>
         <li>
            <a href="/dashboard/posts/create" class="{{ Request::is('dashboard/posts/create') ? 'active' : '' }}">Create Post</a>
         </li>
      </ul>
   </li>
   @can('admin')      
      <hr class="navbar-divider my-3">   
      <h6 class="text-center text-uppercase text-warning">Admin</h6>
      <li class="{{ Request::is('dashboard/categories*') ? 'active-page' : '' }}">
         <a href="/dashboard/categories" class="{{ Request::is('dashboard/categories') ? 'active' : '' }}">
            <i data-feather="grid"></i>Posts
            <i class="fas fa-chevron-right dropdown-icon"></i>
         </a>
         <ul class="">
            <li class="dropdown-header d-none d-md-block ">
               <h6 class="text-uppercase mb-0">Admin</h6>
            </li>
            <li>
               <a href="/dashboard/categories" class="{{ Request::is('dashboard/categories') ? 'active' : '' }}">Categories</a>
            </li>
            <li>
               <a href="/dashboard/categories/create" class="{{ Request::is('dashboard/categories/create') ? 'active' : '' }}">Create Category</a>
            </li>
         </ul>
      </li>
   @endcan
</ul>