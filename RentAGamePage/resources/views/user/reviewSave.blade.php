@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{__('review.view')}}</div>

                <div class="card-body">
                {{__('review.save')}}
                </div>
                <div class="row justify-content-center">
                    <form method="GET" action="{{ route('videogame.list') }}">
                        <button type="submit" class="btn btn-primary">{{ __('user.home') }}</button>
                    </form><br>           
                </div>
            </div>
        </div>
    </div>
</div>
@endsection