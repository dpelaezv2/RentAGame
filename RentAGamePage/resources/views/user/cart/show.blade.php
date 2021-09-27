@extends('layouts.app')

@section('content')
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <div class="row justify-content-center">
            <div class="portfolio-item mx-auto">
                <form method="GET" action="{{ route('user.cart.delete') }}">
                    <button type="submit" class="btn btn-primary">{{ __('user.deleteCart') }}</button><br>
                </form>         
                <form method="GET" action="{{ route('user.buy') }}">
                    <button type="submit" class="btn btn-primary">{{ __('user.buy') }}</button>
                </form>   
            </div>       
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($data["videoGames"] as $videoGame)
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <img class="img-fluid" src="{{ asset('uploads/videoGames/'.$videoGame->getPicture())}}" alt="image" /><br>
                            <h5 class="card-title fw-bold">{{ __('videogame.titulo') }}: {{ $videoGame->getTitle() }}</h5>
                            <p  class="card-text">{{ __('user.renta') }} {{ $data["forRent"][$videoGame->getID()] }}</p>
                        </div>
                    </div><br>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection