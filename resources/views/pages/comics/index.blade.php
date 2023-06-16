@extends( 'layout.app' )

@section('title')
comics | all comics
@endSection

@section( 'content' )


<section class="container-fluid">
    <div class="row p-5 justify-content-between">

        @foreach ($comics as $item)

        <div class="card indexc mb-5">
            <img class="card-img-top" src="{{$item->thumb}}" alt="Title">
            <div class="card-body">
                <h4 class="card-title text-center">{{$item->title}}</h4>
                <p class="card-text text-center">{{$item->description}}</p>
            </div>
        </div>

        @endforeach

    </div>
</section>

@endSection