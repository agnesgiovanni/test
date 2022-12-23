@extends('master')

@section('title', 'Home Page')

@section('content')

<div class="container">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="true">

    <div class="carousel-inner">
      @foreach ($movie as $b)
      <div class="carousel-item active 
      @if ($loop->first) active
      @endif
      ">
        <img src="{{url('storage/background/'.$b->background)}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <p>{{$b->genre . ' | ' . $b->date}}</p>
          <h1>{{$b->name}}</h1>
          <p>{{$b->description}}</p>
        </div>
      </div>
      @endforeach
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
</div>   

<div class="popular-header">
  <div>
    <i class="fa-solid fa-fire-flame-curved"></i> Popular
    <hr />
  </div>
    
  <div class="movie-list">
    @foreach ($movie as $mo)
        <div class="movie-list-item">
          <img src="{{url('storage/thumbnail/'.$mo->thumbnail)}}">
          <p class="movie-title">{{$mo->title}}</p>
          <p class="movie-year">{{$mo->date}}</p>
        </div>
    @endforeach
  </div>
</div>

<div class="show-header">
  <div class="show">
    <i class="fa-solid fa-film"></i> Show
  </div>
  <form class="d-flex" action="{{url('/search')}}">
    <input class="form-control me-2" name="search" type="search" placeholder="Search">
    <button class="btn btn-outline-success text-white" type="submit">Search</button>
  </form>
</div>

{{-- <div id="genre-navbar" class="body-container">
  <div class="genre-wrapper">
    @foreach ($genre as $g)
      <button type="button" class="btn btn-light genre-choice">{{$g->genre}}</button>
    @endforeach
  </div>
  <i class="fa-solid fa-circle-chevron-left"></i>
  <i class="fa-solid fa-circle-chevron-right"></i>
</div> --}}

<div id="sort-navbar" class="body-container"> 
  <p>Sort By</p>
  <button id="sort-latest" type="button" class="btn btn-light me-2">Latest</button>
  <button id="sort-asc" type="button" class="btn btn-light me-2">A-Z</button>
  <button id="sort-desc" type="button" class="btn btn-light me-2">Z-A</button>

  @auth
  @if (Auth::user()->role == 'admin')
  <button type="button" class="btn btn-danger" id="btn-admin" action="{{'/insertMovie'}}">
    <i class="fa-solid fa-plus"></i> Add Movie
  </button>
  @endif
  @endauth
</div>

<div class="movie-list">
    @foreach ($movie as $mo)
      <div class="movie-list-item">
        <img src="{{url('storage/thumbnail/'.$mo->thumbnail)}}">
        <p class="movie-title">{{$mo->title}}</p>
        <p class="movie-year">{{$mo->date}}</p>
          
        @auth
        @if (Auth::user()->role == 'member')
          <button type="button" class="btn btn-danger" id="btn-admin" action="{{'/watchlist'}}">
            <i class="fa-solid fa-plus"></i>
          </button>
        @endif
        @endauth
      </div>
    @endforeach
  </div>

@endsection