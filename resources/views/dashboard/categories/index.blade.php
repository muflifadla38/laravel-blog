@extends('dashboard.layouts.main')

@section('main-wrapper') 
   <div class="table-responsive col-lg-6">
      <div class="mb-5">            
      @if (session('postCRUD'))
         <div class="alert alert-success alert-dismissible fade show d-flex align-items-center mb-3 py-1" role="alert">
            <i class="ri-checkbox-circle-line pe-2 fs-2"></i>
            <div>{{ session('postCRUD') }}</div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
      @endif    
      </div>
      <a href="/dashboard/categories/create" class="badge bg-primary me-2"><i data-feather="plus"></i></a>
      <table class="table mb-5">
         <thead>
         <tr>
            <th scope="col">#</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
         </tr>
         </thead>
         <tbody>
            @foreach ($categories as $category)
               <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $category->name }}</td>
                  <td>
                     <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-primary"><i data-feather="eye"></i></a>
                     <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-success"><i data-feather="edit"></i></a>
                     <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Yakin Hapus Postingan ?')"><i data-feather="trash"></i></button>
                     </form>
                  </td>
               </tr>          
            @endforeach
         </tbody>
      </table>
   </div>

@endsection