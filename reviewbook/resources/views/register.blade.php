@extends('layouts.master')

@section('content')

<section id="register-section" class="register-section section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>REGISTER</h2>
  </div>
  <!-- End Section Title -->

  <div class="container" data-aos="fade-up">
    <form action="/welcome" method="POST" class="row g-3">
      @csrf

      <div class="col-md-6">
        <label for="first_name" class="form-label">First Name</label>
        <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
      </div>

      <div class="col-md-6">
        <label for="last_name" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
      </div>

      <div class="col-12">
        <label class="form-label">Gender</label>
        <div class="d-flex flex-wrap gap-3">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="male" value="Male" {{ old('gender') == 'Male' ? 'checked' : '' }} required>
            <label class="form-check-label" for="male">Male</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="female" value="Female" {{ old('gender') == 'Female' ? 'checked' : '' }}>
            <label class="form-check-label" for="female">Female</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" id="other" value="Other" {{ old('gender') == 'Other' ? 'checked' : '' }}>
            <label class="form-check-label" for="other">Other</label>
          </div>
        </div>
      </div>

      <div class="col-12">
        <label for="nationality" class="form-label">Nationality</label>
        <select class="form-select" id="nationality" name="nationality" required>
          <option value="">-- Pilih --</option>
          <option value="Indonesia" {{ old('nationality') == 'Indonesia' ? 'selected' : '' }}>Indonesia</option>
          <option value="Singapore" {{ old('nationality') == 'Singapore' ? 'selected' : '' }}>Singapore</option>
          <option value="Japan" {{ old('nationality') == 'Japan' ? 'selected' : '' }}>Japan</option>
        </select>
      </div>

      <div class="col-12">
        <label class="form-label">Language Spoken</label>
        <div class="d-flex flex-wrap gap-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="language[]" value="Bahasa Indonesia" id="indonesia" {{ in_array('Bahasa Indonesia', old('language', [])) ? 'checked' : '' }}>
            <label class="form-check-label" for="indonesia">Bahasa Indonesia</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="language[]" value="English" id="english" {{ in_array('English', old('language', [])) ? 'checked' : '' }}>
            <label class="form-check-label" for="english">English</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="language[]" value="Japanese" id="japanese" {{ in_array('Japanese', old('language', [])) ? 'checked' : '' }}>
            <label class="form-check-label" for="japanese">Japanese</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="language[]" value="Arabic" id="arabic" {{ in_array('Arabic', old('language', [])) ? 'checked' : '' }}>
            <label class="form-check-label" for="arabic">Arabic</label>
          </div>
        </div>
      </div>

      <div class="col-12">
        <label for="bio" class="form-label">Bio</label>
        <textarea class="form-control" id="bio" name="bio" rows="4">{{ old('bio') }}</textarea>
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary">Sign Up</button>
      </div>
    </form>
  </div>

</section>
@endsection