@extends('layouts.home')

@section('content')


    <div id="carouselExampleCaptions" class="slide-img carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ url('assets/images/hero.jpg') }}" class="d-block w-100 h-100" alt="...">

            </div>
            <div class="carousel-item">
                <img src="{{ url('assets/images/hero2.jpg') }}" class="d-block w-100 h-100" alt="...">

            </div>
            <div class="carousel-item">
                <img src="{{ url('assets/images/hero3.jpg') }}" class="d-block w-100 h-100" alt="...">

            </div>
            <div class="carousel-caption hero-content  mb-5 fixed  text-black">
                <h5 class="header-title text-capitalize">Find Good food Articles Here</h5>
                <p class="text-capitalize">all the articles and contents of the site have been update today and
                    you can fond your articles and contents quickly and without any problems.</p>
                <form action="#" method="get" class="d-flex align-items-center gap-2 bg-light rounded p-2">
                    <div class="input-group">
                        <span class="input-group-text bg-transparent border-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </span>
                        <input type="search" class="form-control bg-transparent border-0" name="search" id="search"
                            placeholder="search">
                    </div>
                    <button type="submit" class="btn-simpan rounded-2 p-2">Go</button>
                </form>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <section class="mt-5 d-flex ">
        <div class="container">
            <div class="row">
                @foreach ($articles as $item)
                    <a href="{{ route('artikel.detail', $item->slug) }}" class="card mb-3 ms-2 text-decoration-none" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ url('storage/' . $item->cover) }}" class=" mt-4 img-fluid rounded-start"
                                    alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $item->title }}</h4>
                                    <h5 class="text-black mt-0">{{ $item->province->name }}</h5>
                                    <p class="card-text text-secondary">
                                        {{ str_word_count($item->body) > 1 ? substr($item->body, 0, 100) . '.....' : $item->body }}
                                    </p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>




    @extends('layouts.footer')
