@extends("layouts.master")

    @section("contenuto")
    <div class="jumbotron">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="Jumbotron"
            class="w-100 jumbo_img" style="height: 500px; object-fit: cover; object-position: top;">
    </div>

    <section class="bg-dark text-white py-5">
        <div class="container">
            <h2 class="bg-primary d-inline-block px-3 py-2 text-uppercase fw-bold mb-4">Current Series</h2>

            <div class="row g-4">
                @foreach ( $comics as $comic )
                    
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="card-comic h-100 d-flex flex-column">
                        <img src="{{ $comic["thumb"] }}" alt="{{ $comic["title"] }}"
                            class="w-100 mb-2" style="height: 250px; object-fit: cover; object-position: top;">
                        <h3 class="text-uppercase mt-2 fs-6">{{$comic["title"]}}</h3>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </section>
    @endsection
