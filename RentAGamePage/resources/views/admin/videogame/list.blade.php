@extends('layouts.app')

@section('content')
<section class="page-section portfolio" id="portfolio">
    <div class="container">
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">{{ __('admin.panel') }}</h2><br>
        <div class="row justify-content-center">
            <form method="GET" action="{{ route('admin.videogame.create') }}">
                <button type="submit" class="btn btn-primary">{{ __('admin.crearVideoJuego') }}</button>
            </form><br>           
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($data["videogames"] as $videogame)
            <div class="col" >
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $videogame->getId() }} - {{ $videogame->getTitle() }}</h5>
                        <p  class="card-text">{{ __('videogame.precio') }}: {{ $videogame->getPrice() }}</p>
                        <p  class="card-text">{{ __('videogame.cantidadVenta') }}: {{ $videogame->getSaleStock() }}</p>
                        <p  class="card-text">{{ __('videogame.cantidadRenta') }}: {{ $videogame->getRentStock() }}</p>
                        <form method= "POST" action=" {{ route('admin.videogame.delete') }}">
                        {{csrf_field()}}
                            <button type="submit">{{ __('videogame.borrar') }}</button>
                            <input type="hidden" value="{{ $videogame->getId() }}" name="VGid">
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection
