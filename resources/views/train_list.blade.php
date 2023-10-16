@extends('layouts.app')

@section('main-content')
  <section class="container mt-5">
    <h1>{{ $title }}</h1>

    @foreach ($trains as $train)

    {{$train->brand}}
        
    @endforeach
  </section>
@endsection
