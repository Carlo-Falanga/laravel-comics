@extends("layouts.master")

    @section("contenuto")
    <div class="jumbotron">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="Jumbotron"
            class="w-100 jumbo_img" style="height: 500px; object-fit: cover; object-position: top;">
    </div>
    @endsection
