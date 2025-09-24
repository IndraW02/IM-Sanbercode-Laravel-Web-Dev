@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <h1 class="page-title">DASHBOARD</h1>

    <h2>Selamat Datang {{ $firstName }} {{ $lastName }}</h2>
    <p>Terima kasih telah bergabung di SanberBook. Social Media kita bersama</p>
@endsection