@extends('layouts.main')

@section('title', 'comic')

@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex flex-wrap justify-content-center">
                    <div class="card m-2" >
                        <img src="{{$comic->thumb}}" class="card-img-top" alt="{{'image of'.' '.$comic->title}}">
                        <div class="card-body">
                            <h5 class="card-title"><span class="fw-bold">Title:</span>{{' '.$comic->title}}</h5>
                            <p class="card-text"><span class="fw-bold">Series:</span>{{' '.$comic->series}}</p>
                            <p class="card-text"><span class="fw-bold">Description:</span>{{' '.$comic->description}}</p>
                            <p class="card-text"><span class="fw-bold">Sale date:</span>{{' '.$comic->sale_date}}</p>
                            <p class="card-text"><span class="fw-bold">Type:</span>{{' '.$comic->type}}</p>
                            <p class="card-text"><span class="fw-bold">Price:</span>{{' '.$comic->price.' $'}}</p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection

