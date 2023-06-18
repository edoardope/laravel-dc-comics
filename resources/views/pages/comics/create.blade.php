@extends('layout.app')

@section('title')
comics | create
@endsection

@section('content')
<section class="container p-5">
    @if($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
               <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <div class="row">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <h1 class="pb-3">create new entry</h1>
            <div class="form-floating mb-3">
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" name="title">
                @error('title')
                <div class="alert alert-danger" role="alert"> 
                    {{$message}}
                </div>
                @enderror
                <label for="floatingInput">Title</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="description"></textarea>
                <label for="floatingTextarea2">Description</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="thumb">
                <label for="floatingInput">thumb link</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" step="0.01" class="form-control" id="floatingInput" placeholder="name@example.com" name="price">
                <label for="floatingInput">price</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="series">
                <label for="floatingInput">series</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="sale_date">
                <label for="floatingInput">Date dd/mm/yyyy</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="type">
                <label for="floatingInput">type</label>
            </div>
            <button type="submit">Send</button>
        </form>
    </div>
</section>
@endsection