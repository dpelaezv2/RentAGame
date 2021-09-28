@extends('layouts.app')

@section('content')
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <div class="row justify-content-center">
                <form action="{{ route('review.add') }}" method = "POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb - 3">
                        <label for="">{{ __('review.descripcion') }}</label>
                        <input type="text" name="description", class="form-control">
                    </div>
                    <input type="hidden" value="{{ $data['game'] }}" name="videoGameId">
                    <input type="hidden" value="{{ Auth::id() }}" name="userId">
                    <div class="form-group mb - 3">
                        <button type="submit" class="btn btn-primary">{{ __('review.go') }}</button>
                    </div>
                </form>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($data['reviews'] as $review)
                        <b>Comments:</b><br/>
                            {{ $review->getReviewDate() }}<br/>
                            <b>{{ $review->getUser() }}</b><br/>
                            - {{ $review->getDescription() }}<br/>
                    @endforeach
                </div>
            </div>
    </section>
@endsection
