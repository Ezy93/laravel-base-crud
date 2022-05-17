@extends('layouts.main')

@section('title', 'add comic')

@section('main-content')
<div class="container-fluid my-5">
    <div class="row">
        <div class="col-8 offset-2">
            <form action="{{route('comics.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Comic title:</label>
                    <input type="text" class="form-control" name="title" id="title" >
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Comic description:</label>
                    <input type="text" class="form-control" name="description" id="description" >
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Comic image URL:</label>
                    <input type="text" class="form-control" name="thumb" id="thumb" >
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Comic price:</label>
                    <input type="number" class="form-control" name="price" id="price" >
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Comic series:</label>
                    <input type="text" class="form-control" name="series" id="series" >
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Comic sale date:</label>
                    <input type="date" class="form-control" name="sale_date" id="sale_date" >
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Comic type:</label>
                    <input type="text" class="form-control" name="type" id="type" >
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
