<header class="bg-white">
    <nav class="navbar navbar-expand-lg container py-3">
        <div class="container-fluid">
            {{-- Logo DC --}}
            <a class="navbar-brand" href="#">
                <img src="{{ Vite::asset('resources/img/dc-comics-logo.svg') }}" alt="DC Comics" width="60">
            </a>

            {{-- Bottone hamburger per mobile --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- Menu --}}
            <div class="collapse navbar-collapse justify-content-end" id="mainNav">
                <ul class="navbar-nav text-uppercase fw-bold">
                    <li class="nav-item"><a class="nav-link" href="#">Characters</a></li>
                    <li class="nav-item"><a class="nav-link active text-primary" href="#">Comics</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Movies</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">TV</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Games</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Collectibles</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Videos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Fans</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">News</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Shop</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
