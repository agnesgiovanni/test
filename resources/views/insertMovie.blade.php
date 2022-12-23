@extends('master')

@section('title', 'Add Movie')

@section('content')

<h1>Add Movie</h1>
<br>
<form action="{{url('insert/')}}" style="margin: 50px 100px" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="mb-3">
        <label for="floatingInput" class="form-label">Title</label>
        <input type="text" class="form-control" id="movie_title" name="movie_title">
        @error('movie_title')
            {{$message}}
        @enderror
    </div>
    <div class="mb-3">
        <label for="floatingInput" class="form-label">Description</label>
        <input type="text" class="form-control" id="movie_desc" name="movie_desc">
        @error('movie_desc')
            {{$message}}
        @enderror
    </div>
    <div class="mb-3">
        <label for="floatingInput" class="form-label">Genre</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            @foreach ($genres as $g)
                <option id="{{ $g->id }}" value="{{ $g->genre }}">{{ $g->genre }}</option>
            @endforeach
        </select>
    </div>    
    <div class="mb-3">
        <label for="floatingInput" class="form-label">Genre</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div> 
    <div class="mb-3">
        <label for="floatingInput" class="form-label">Director</label>
        <input type="text" class="form-control" id="movie_director" name="movie_director">
        @error('movie_director')
            {{$message}}
        @enderror
    </div>
    <div class="mb-3">
        <label for="floatingInput" class="form-label">Release Date</label>
        <input type="text" class="form-control" id="movie_date" name="movie_date">
        @error('movie_date')
            {{$message}}
        @enderror
    </div>
    <div class="mb-3">
        <label for="floatingInput" class="form-label">Image Url</label>
        <input type="file" class="form-control" id="movie_thumbnail" name="movie_thumbnail" placeholder="Insert">
        @error('movie_thumbnail')
            {{$message}}
        @enderror
    </div>
    <div class="mb-3">
        <label for="floatingInput" class="form-label">Background Url</label>
        <input type="file" class="form-control" id="movie_background" name="movie_background" placeholder="Insert">
        @error('movie_background')
            {{$message}}
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>

@endsection