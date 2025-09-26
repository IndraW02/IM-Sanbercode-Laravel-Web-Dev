@extends('layouts.master')

@section('title', 'Detail Genre')
@section('body_class', 'starter-page-page')

@section('content')
<section id="starter-section" class="starter-section section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>DETAIL GENRE</h2>
  </div>

  <div class="container" data-aos="fade-up">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{ $genre->name }}</h5>
        <p class="card-text">{{ $genre->description }}</p>
        <a href="{{ route('genre.edit', $genre->id) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('genre.index') }}" class="btn btn-secondary">Kembali</a>
      </div>
    </div>
  </div>

</section>
@endsection