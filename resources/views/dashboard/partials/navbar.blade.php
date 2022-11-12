<nav class="navbar navbar-expand-lg d-flex justify-content-between">
   <a href="#" id="sidebar-collapsed-toggle" class="pe-4"><i class="ri-menu-2-line fs-3 fw-bold"></i></a>
   <div class="header-title flex-fill">
      <a href="#" id="sidebar-toggle"><i data-feather="arrow-left"></i></a>
      <h5><a href="/dashboard" class="text-reset">Dashboard</a></h5>
   </div>
   <div class="header-search">
      <form>
         <input class="form-control" type="text" placeholder="Type something.." aria-label="Search">
         <a href="#" class="close-search"><i data-feather="x"></i></a>
      </form>
   </div>
   <div class="flex-fill" id="headerNav">
      <ul class="navbar-nav">
         <li class="nav-item d-md-block d-lg-none">
         <a class="nav-link" href="#" id="toggle-search"><i data-feather="search"></i></a>
         </li>
         <li class="nav-item dropdown">
         <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button"
            data-bs-toggle="dropdown" aria-expanded="false"><img
               src="/img/avatar.jpg" class="img-fluid rounded-circle me-1" alt="">{{ auth()->user()->name }}
         </a>
         <div class="dropdown-menu dropdown-menu-end profile-drop-menu" aria-labelledby="profileDropDown">
            <a class="dropdown-item" href="#">
               <i data-feather="user"></i>Profile
            </a>
            <div class="dropdown-divider"></div>
            <form action="/logout" method="post" class="p-0">
               @csrf                  
               <button class="dropdown-item" href="#">
                  <i data-feather="log-out"></i>Logout 
               </button>
             </form>
         </div>
         </li>
      </ul>
   </div>
</nav>