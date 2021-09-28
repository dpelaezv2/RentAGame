@extends('layouts.app')

@section('content')
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <div class="row justify-content-center">
            <form method="POST" action="{{ route('review.add') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>{{__('review.descripcion')}}</label>
                    <input type="text" class="form-control" name="description"
                        value="{{ old('description') }}">
                </div>
                <button type="submit" class="btn btn-primary" name="id" value="{{$data['videoGame']->getId()}}">{{__('review.crear')}}</button>
            </form>
        </div>
    </div>
</section>
@endsection
