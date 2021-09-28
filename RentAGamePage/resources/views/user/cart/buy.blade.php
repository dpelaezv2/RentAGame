@extends('layouts.app')

@section('content')
<section class="page-section portfolio" id="portfolio">
    <div class="container">
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">{{ __('user.bill') }}</h2><br>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <h5 class="card-title fw-bold">{{ $data }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <form method="GET" action="{{ route('videogame.list') }}">
            <button type="submit" class="btn btn-primary">{{ __('user.home') }}</button>
        </form><br>           
    </div>
</section>
@endsection