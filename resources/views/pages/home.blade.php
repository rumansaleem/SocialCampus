@extends('layouts.app')

@section('title', 'Home Page | ')

@section('content')
  <section class="profile-head">
    <div class="profile-cover">
      <div class="overlay"></div>
      <img src="{{ asset('images/banner.jpg') }}" alt="banner" class="cover">
    </div>
    <div class="profile-pic">
      <img src="{{ asset('images/no-pic.jpg') }}" alt="profile-pic" class="round">
    </div>
  </section>
@endsection
