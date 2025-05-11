@extends('layouts.app')
<!-- @include('components.card') -->

@section('content')
  <!-- Hero section -->
  @include('partials.hero')
  <!-- Cards section -->
  @include('partials.cards')
  <!-- TextBlock & image sections -->
  @include('partials.textimgblock')

@endsection
