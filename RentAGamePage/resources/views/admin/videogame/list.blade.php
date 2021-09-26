@extends('layouts.app')

@section('content')
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($data["videogames"] as $videogame)
            <div class="col" >
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $videogame->getId() }} - {{ $videogame->getTitle() }}</h5>
                        <p  class="card-text">{{ __('videogame.precio') }} {{ $videogame->getPrice() }}</p>
                        <p  class="card-text">{{ __('videogame.cantidadVenta') }} {{ $videogame->getSaleStock() }}</p>
                        <p  class="card-text">{{ __('videogame.cantidadRenta') }} {{ $videogame->getRentStock() }}</p>
                        <form method= "POST" action=" {{ route('home.delete') }}">
                        {{csrf_field()}}
                            <button type="submit">{{ __(videogame.borrar) }}</button>
                            <input type="hidden" value="{{ $data["id"] }}" name="VGid">
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection
