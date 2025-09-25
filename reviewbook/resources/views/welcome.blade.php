@extends('layouts.master')

@section('title', 'Welcome')
@section('body_class', 'starter-page-page')

@section('content')
<section id="starter-section" class="starter-section section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>DASHBOARD</h2>
  </div>
  <!-- End Section Title -->

  <div class="container" data-aos="fade-up">
    <h2>Selamat Datang {{ $firstName }} {{ $lastName }}</h2>
    <p>Terima kasih telah bergabung di SanberBook. Social Media kita bersama</p>
  </div>

</section>
@endsection