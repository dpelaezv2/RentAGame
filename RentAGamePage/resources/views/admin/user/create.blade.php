@extends('admin.layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('admin.panel') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.user.save') }}">
                        @csrf
                        <div class="form-group">
                            <label>{{ __('admin.name') }}</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label>{{ __('admin.email') }}</label>
                            <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label>{{ __('admin.address') }}</label>
                            <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                        </div>
                        <div class="form-group">
                            <label for="password">{{ __('admin.password') }}</label>
                            <input type="password" class="form-control" name="password" value="{{ old('password') }}">
                        </div>
                        <div class="form-group">
                            <label>{{ __('admin.admin') }}?</label>
                            <input type="text" class="form-control" name="admin" value="{{ old('admin') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('admin.crear') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection