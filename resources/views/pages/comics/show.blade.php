@extends( 'layout.app' )

@section('title')
comics | show {{$comic->title}}
@endSection

@section( 'content' )

<section class="conteiner containers">
    <div class="row justify-content-center">
        <div class="cards">
            <img class="card-img-top imgs" src="{{$comic->thumb}}" alt="Title">
            <div class="card-body">
                <h4 class="card-title text-center mt-3">{{$comic->title}}</h4>
                <p class="card-text text-center mt-3">{{$comic->description}}</p>
            </div>
        </div>
    </div>
</section>

@endSection