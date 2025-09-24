@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <h1 class="page-title">REGISTER</h1>

    <form action="/welcome" method="POST">
        @csrf
        <div class="mb-3">
            <label>First name:</label><br>
            <input type="text" name="first_name" class="form-control" value="{{ old('first_name') }}">
        </div>

        <div class="mb-3">
            <label>Last name:</label><br>
            <input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}">
        </div>

        <div class="mb-3">
            <label>Gender:</label><br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="Male" id="male" {{ old('gender') == 'Male' ? 'checked' : '' }}>
                <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="Female" id="female" {{ old('gender') == 'Female' ? 'checked' : '' }}>
                <label class="form-check-label" for="female">Female</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="Other" id="other" {{ old('gender') == 'Other' ? 'checked' : '' }}>
                <label class="form-check-label" for="other">Other</label>
            </div>
        </div>

        <div class="mb-3">
            <label>Nationality:</label><br>
            <select name="nationality" class="form-select">
                <option value="">-- Pilih --</option>
                <option value="Indonesia" {{ old('nationality') == 'Indonesia' ? 'selected' : '' }}>Indonesia</option>
                <option value="Singapore" {{ old('nationality') == 'Singapore' ? 'selected' : '' }}>Singapore</option>
                <option value="Japan" {{ old('nationality') == 'Japan' ? 'selected' : '' }}>Japan</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Language Spoken:</label><br>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="language[]" value="Bahasa Indonesia" id="indonesia" {{ in_array('Bahasa Indonesia', old('language', [])) ? 'checked' : '' }}>
                <label class="form-check-label" for="indonesia">Bahasa Indonesia</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="language[]" value="English" id="english" {{ in_array('English', old('language', [])) ? 'checked' : '' }}>
                <label class="form-check-label" for="english">English</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="language[]" value="Other" id="other_lang" {{ in_array('Other', old('language', [])) ? 'checked' : '' }}>
                <label class="form-check-label" for="other_lang">Other</label>
            </div>
        </div>

        <div class="mb-3">
            <label>Bio:</label><br>
            <textarea name="bio" class="form-control" rows="4">{{ old('bio') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Sign Up</button>
    </form>
@endsection