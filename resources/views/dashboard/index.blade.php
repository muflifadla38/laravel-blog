@extends('dashboard.layouts.main')

@section('main-wrapper') 
  <div class="row">
    <div class="col-12 col-sm-6 col-xxl-3 d-flex">
    <div class="card illustration flex-fill">
      <div class="card-body p-0 d-flex flex-fill">
        <div class="row g-0 w-100">
          <div class="col-6">
            <div class="illustration-text p-3 m-1">
              <h5 class="illustration-text">Welcome Back, {{ explode(' ', auth()->user()->name, 2)[0] }}!</h5>
              <p class="mb-0">JappaID</p>
              <p></p>
            </div>
          </div>
          <div class="col-6 align-self-end text-end">
            <img src="https://appstack.bootlab.io/img/illustrations/customer-support.png" alt="Customer Support" class="img-fluid illustration-img">
          </div>
        </div>
      </div>
    </div>
  </div>  
      <div class="col-md-3">
          <div class="card stats-card">
              <div class="card-body">
                <div class="stats-info d-flex align-items-center pe-2 justify-content-between">
                  <h5 class="card-title">
                    <a href="/dashboard/posts" class="text-reset">Total Posts</a>
                  </h5>
                  <div class="dropdown">
                    <a data-bs-toggle="dropdown" href="#" class="text-reset" aria-expanded="false">
                      <span data-feather="more-vertical"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" style="">
                      <a class="dropdown-item text-reset" href="/dashboard/posts">
                        <span style="width: 16px; height: 16px;" data-feather="eye"></span> View
                      </a>
                      <a class="dropdown-item text-reset" href="/dashboard/posts/create">
                        <span style="width: 16px; height: 16px;" data-feather="plus"></span> Create
                      </a>
                    </div>
                  </div>
                </div>
                <div class="d-flex align-items-center justify-content-between mt-10">
                  <span class="stats-text">
                    <a href="/dashboard/posts" class="text-reset h4">{{ auth()->user()->posts()->count() }}</a>
                  </span>
                  <div class="stats-icon change-danger">
                    <i class="material-icons">article</i>
                  </div>
                </div>
              </div>
            </div>
      </div>    
  </div>
  @endsection