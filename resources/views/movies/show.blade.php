@extends('layout.app')

@section('content')
    <div class="container" style="padding-top: 10px">
        <div class="row">
            <div class="col" style="display: flex">
                <img class ="rounded" src="/img/icon/Beeflix.gif" alt="Beeflix Logo" width="60" height="60">
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
            <div class="col-sm-3">
                <div class="text-center">
                    <img src="/{{$movie->photo}}" alt="{{$movie->title}}" width="200" height="300">
                </div>
            </div>
            <div class="col-sm-5">
                <div class="row">
                    <h3>
                        {{$movie->title}}
                    </h3>
                </div>
                <div class="row">
                    @for ($i = 0; $i < $movie->rating; $i++)
                        <img src="/img/icon/star.svg" alt="rating" width="10" height="10">
                    @endfor
                    @for ($i = $movie->rating; $i < 5; $i++)
                        <img src="/img/icon/star_empty.svg" atl="emptyrating" width="10" height="10">
                    @endfor
                </div>
                <div class="row">
                    <p>{{$movie->description}}</p>
                </div>
                <div class="row">
                    <p>Category : <a class="btn btn-outline-primary" href="/genre/{{$movie->genre_id}}">{{$movie->genre->name}}</a> </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <h4>EPISODE</h4>
                    <table class = "table table-bordered table-stripped">
                        <thead>
                            <tr>
                                <th>Episode</th>
                                <th>Title</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($episode as $e)
                                <tr>
                                <td>{{$e->episode}}</td>
                                <td>{{$e->title}}</td>
                                </tr> 
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="pagination text-center">
                        {{$episode->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection