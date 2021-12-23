@extends('layout.app')

@section('content')
    <div class="container" style="padding-top: 10px">
        <div class="row">
            <div class="col" style="display: flex">
                <img class ="rounded"src="/img/icon/Beeflix.gif" alt="Beeflix Logo" width="60" height="60">
                <h1 style="padding-left: 10px">BeeFlix</h1>
            </div>
        </div>
    </div>
    <div class="container" style="padding-top: 10px">
        <div class="row">
            <div class="col">
            <a href="{{ URL::previous() }}" class = "btn btn-warning"><img src="/img/icon/back.svg" alt="back-arrow" width="10" height="10">BACK</a>
            <a href="/" class = "btn btn-primary">SEE ALL MOVIES</a>
            </div>
        </div>
    </div>
    <div class="container" style="padding-top: 30px">
        <div class="row">
            <div class="col-sm-12">
            <h4>{{$genre->name}}</h4>
            </div>
        </div>
        <div class="row">
            @foreach ($genre->movie as $m)
                <div class="col-sm-3">
                    <div class="card">
                    <img class = "card-img-top" width="240" height="400" src="/{{$m->photo}}" alt="{{$m->title}}">
                    <div class="card-body">
                        <div class="text-center">
                        <h6 class="card-title">{{$m->title}}</h5>
                    
                        <a href="/movies/{{$m->id}}" class = "btn btn-info">Movie's info</a>
                        </div>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection