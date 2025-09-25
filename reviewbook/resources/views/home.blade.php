@extends('layouts.master')

@section('title', 'SanberBook')
@section('body_class', 'starter-page-page')

@section('content')
<section id="starter-section" class="starter-section section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>HOME</h2>
  </div>
  <!-- End Section Title -->

  <div class="container" data-aos="fade-up">
    <h2>SanberBook</h2>
    <h3>Social Media Developer Santai Berkualitas</h3>
    <p>Belajar dan Berbagi agar hidup ini semakin santai berkualitas</p>

    <h4>Benefit Join di SanberBook</h4>
    <ul>
      <li>Mendapatkan motivasi dari sesama developer</li>
      <li>Sharing knowledge dari para mastah Sanber</li>
      <li>Dibuat oleh calon web developer terbaik</li>
    </ul>

    <h4>Cara Bergabung ke SanberBook</h4>
    <ol>
      <li>Mengunjungi Website ini</li>
      <li>mendaftar di <a href="/register">Form Sign Up</a></li>
      <li>Selesai</li>
    </ol>
  </div>

</section>
@endsection