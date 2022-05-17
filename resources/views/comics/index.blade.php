@extends('layouts.main')

@section('title', 'comics')

@section('main-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                @foreach ($comics as $comic)
                    <div class="card w-25" >
                        <img src="{{$comic->thumb}}" class="card-img-top" alt="{{'image of'.' '.$comic->title}}">
                        <div class="card-body">
                            <h5 class="card-title"><span class="fw-bold">Title:</span>{{' '.$comic->title}}</h5>
                            <p class="card-text"><span class="fw-bold">Series:</span>{{' '.$comic->series}}</p>
                            <p class="card-text"><span class="fw-bold">Description:</span>{{' '.$comic->description}}</p>
                            <p class="card-text"><span class="fw-bold">Sale date:</span>{{' '.$comic->sale_date}}</p>
                            <p class="card-text"><span class="fw-bold">Type:</span>{{' '.$comic->type}}</p>
                            <p class="card-text"><span class="fw-bold">Price:</span>{{' '.$comic->price.' $'}}</p>
                            <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">Comic details</a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection

