@extends('layouts.app')

@section('content')

    <div class="row row-cols-1 row-cols-md-3 g-4">
    <div calss="card-header">
    </div>
    <div class="card-body">
        <form action="{{url('add-videogame')}}" method = "POST" enctype="multipart/form-data">
        @csrf
            <div class="form-group mb - 3">
                <label for="">Title</label>
                <input type="text" name="title", class="form-control">
            </div>
            <div class="form-group mb - 3">
                <label for="">Developer</label>
                <input type="text" name="developer", class="form-control">
            </div>
            <div class="form-group mb - 3">
                <label for="">Category</label>
                <input type="text" name="category", class="form-control">
            </div>
            <div class="form-group mb - 3">
                <label for="">Price</label>
                <input type="text" name="price", class="form-control">
            </div>
            <div class="form-group mb - 3">
                <p>Is used .</p>
                    <select name="used" id="inputState" class="form-control">
                        <option selected>True</option>
                        <option>False</option>
                    </select>
            </div>
            <div class="form-group mb - 3">
                <label for="">Sale Stock</label>
                <input type="number" name="saleStock", class="form-control">
            </div>
            <div class="form-group mb - 3">
                <label for="">Rent Stocck</label>
                <input type="text" name="rentStock", class="form-control">
            </div>
            <div class="form-group mb - 3">
                <label for="">KeyWords</label>
                <input type="text" name="keyWords", class="form-control">
            </div>
            <div class="form-group mb - 3">
                <label for="">picture</label>
                <input type="file" name="picture", class="form-control">
            </div>
            <div class="form-group mb - 3">
                <button type="submit" class="btn btn-primary">Guardar Videogame</button>
            </div>
            

        </form>

    </div>
    </div>
@endsection