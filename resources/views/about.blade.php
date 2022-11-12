@extends('layouts.main')

@section('container')
<h1>Halaman {{ $title }}</h1>
<p>Halo. Nama saya <strong>{{ $name }}</strong>, umur saya {{ $age }}. Saya tinggal di {{ $place }}.</p>
<img src="img/{{ $img }}" class="w-25 img-thumbnail rounded-circle shadow my-3" alt="Profile Picture">
@endsection