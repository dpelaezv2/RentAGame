@extends('layouts.app')

@section('content')
<section class="page-section portfolio" id="portfolio">
    <div class="container">
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">{{ __('admin.panel') }}</h2><br>
        <div class="row justify-content-center">
            <form method="GET" action="{{ route('admin.user.create') }}">
                <button type="submit" class="btn btn-primary">{{ __('admin.crearUsuario') }}</button>
            </form><br><br>           
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($data["users"] as $user)
                <div class="col" >
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $user->getId() }} - {{ $user->getName() }}</h5>
                            <p  class="card-text">{{ __('admin.admin') }}: {{ $user->getAdmin() }}</p>
                            <p  class="card-text">{{ __('admin.address') }}: {{ $user->getAddress() }}</p>
                            <form method= "POST" action=" {{ route('admin.user.delete') }}">  
                            {{csrf_field()}}
                                <button type="submit">{{ __('admin.borrar') }}</button>
                                <input type="hidden" value="{{ $user->getId() }}" name="Userid">
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>    
    </div>
</section>
@endsection