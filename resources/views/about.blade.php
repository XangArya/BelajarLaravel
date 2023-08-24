@extends('layouts.main')

@section('konten')
    <h1>Pembuat halaman aneh ini :</h1>
    <h2>{{ $name }}</h2>
    <h3>{{  $email }}</h3>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="350" class="img-thumbnail rounded-circle">
@endsection