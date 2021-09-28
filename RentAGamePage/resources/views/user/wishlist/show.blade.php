@extends('layouts.app')

@section('content')
<section class="page-section portfolio" id="portfolio">
    <div class="container">
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">{{ __('user.wishlist') }}</h2><br>
        <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($data["videoGames"] as $videogame)
            <div class="col" >
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $videogame->getId() }} - {{ $videogame->getTitle() }}</h5>
                        <img class="img-fluid" src="{{ asset('uploads/videoGames/'.$videogame->getPicture())}}" alt="image" />
                        <p  class="card-text">{{ __('videogame.precio') }}: {{ $videogame->getPrice() }}</p>
                        <p  class="card-text">{{ __('videogame.cantidadVenta') }}: {{ $videogame->getSaleStock() }}</p>
                        <p  class="card-text">{{ __('videogame.cantidadRenta') }}: {{ $videogame->getRentStock() }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection