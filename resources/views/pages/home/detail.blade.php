@extends('layouts.home')

@section('content')
    <section class="deatil py-5 ms-5 px-5">
        <div class="container">
            <div class="d-flex  justify-content-between mb-5">
                <h2 class="mb-0">{{ $articles->title }}</h2>
                <a href="{{ route('home') }}" class="btn btn-light">Go Back</a>
            </div>

            <img src="{{ url('storage/' . $articles->cover) }}" alt="{{ $articles->title }}" class="rounded-1 w-100 mb-3">
            <h4 class="text-dark mb-2">{{ $articles->title }}</h4>

            <p class="text-secondary">{{ $articles->body }}</p>
        </div>
    </section>
    <div class="sidebar">
        <h3 class="ms-4 mt-4">ARTIKEL LAINNYA</h3>
      </div>
      <div class="content">

      </div>
@endsection
