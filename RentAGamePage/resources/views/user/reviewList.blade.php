@extends('layouts.app')
@section('content')

<main role="main">
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
            <p class="card-text">{{__('review.ver')}} {{ $data["videoGame"]->getTitle() }}</p>
                @foreach($data["review"] as $review)
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <div class="card-body">
                            <p class="card-text">{{__('review.descripcion')}}: {{ $review->getDescription() }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>

@endsection