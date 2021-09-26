@extends('layouts.app')

@section('content')
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div calss="card-header">
                <h4>{{ __('videogame.crearTitulo') }}</h4>
            </div>
            <div class="card-body">
                <form action="" method = "POST" enctype="multipart/form-data">
                    <div class="form-group mb - 3">
                        <label for="">{{ __('videogame.titulo') }}</label>
                        <input type="text" name="title", class="form-control">
                    </div>
                    <div class="form-group mb - 3">
                        <label for="">{{ __('videogame.desarrollador') }}</label>
                        <input type="text" name="developer", class="form-control">
                    </div>
                    <div class="form-group mb - 3">
                        <label for="">{{ __('videogame.categoria') }}</label>
                        <input type="text" name="category", class="form-control">
                    </div>
                    <div class="form-group mb - 3">
                        <label for="">{{ __('videogame.precio') }}</label>
                        <input type="text" name="price", class="form-control">
                    </div>
                    <div class="form-group mb - 3">
                        <p>{{ __('videogame.uso') }}</p>
                            <select name="used" id="inputState" class="form-control">
                                <option selected>True</option>
                                <option>False</option>
                            </select>
                    </div>
                    <div class="form-group mb - 3">
                        <label for="">{{ __('videogame.cantidadVenta') }}</label>
                        <input type="number" name="saleStock", class="form-control">
                    </div>
                    <div class="form-group mb - 3">
                        <label for="">{{ __('videogame.cantidadRenta') }}</label>
                        <input type="number" name="rentStock", class="form-control">
                    </div>
                    <div class="form-group mb - 3">
                        <label for="">{{ __('videogame.keywords') }}</label>
                        <input type="text" name="keyWords", class="form-control">
                    </div>
                    <div class="form-group mb - 3">
                        <label for="">{{ __('videogame.imagen') }}</label>
                        <input type="file" name="picture", class="form-control">
                    </div>
                    <div class="form-group mb - 3">
                        <button type="submit" class="btn btn-primary">{{ __('videogame.guardar') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
