@extends('layouts.master')

@section('title', 'Daftar Genre')
@section('body_class', 'starter-page-page')

@section('content')
<section id="starter-section" class="starter-section section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>DAFTAR GENRE</h2>
  </div>

  <div class="container" data-aos="fade-up">
    <a href="{{ route('genre.create') }}" class="btn btn-primary mb-3">Tambah Genre Baru</a>

    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
      @foreach($genres as $genre)
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{ $genre->name }}</h5>
              <p class="card-text">{{ Str::limit($genre->description, 50) }}</p>
              <a href="{{ route('genre.show', $genre->id) }}" class="btn btn-sm btn-info">Detail</a>
              <a href="{{ route('genre.edit', $genre->id) }}" class="btn btn-sm btn-warning">Edit</a>
              <form action="{{ route('genre.destroy', $genre->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
              </form>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

</section>
@endsection