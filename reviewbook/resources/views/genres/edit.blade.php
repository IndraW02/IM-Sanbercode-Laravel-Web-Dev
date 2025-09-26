@extends('layouts.master')

@section('title', 'Edit Genre')
@section('body_class', 'starter-page-page')

@section('content')
<section id="starter-section" class="starter-section section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>EDIT GENRE</h2>
  </div>

  <div class="container" data-aos="fade-up">
    <form action="{{ route('genre.update', $genre->id) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="mb-3">
        <label for="name" class="form-label">Nama Genre</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $genre->name }}" required>
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="description" name="description" rows="4">{{ $genre->description }}</textarea>
      </div>

      <button type="submit" class="btn btn-primary">Update</button>
      <a href="{{ route('genre.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
  </div>

</section>
@endsection