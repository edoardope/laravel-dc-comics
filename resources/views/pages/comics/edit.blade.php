@extends('layout.app')

@section('title')
comics | edit
@endsection

@section('content')
<section class="container p-5">
    <div class="row">
        <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <h1 class="pb-3">create new entry</h1>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="title" value="{{old('title') ?? $comic->title }}" >
                <label for="floatingInput">Title</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="description" value="{{old('description') ?? $comic->description }}"></textarea>
                <label for="floatingTextarea2">Description</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="thumb" value="{{old('thumb') ?? $comic->thumb }}">
                <label for="floatingInput">thumb link</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" step="0.01" class="form-control" id="floatingInput" placeholder="name@example.com" name="price" value="{{old('price') ?? $comic->price }}">
                <label for="floatingInput">price</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="series" value="{{old('series') ?? $comic->series }}">
                <label for="floatingInput">series</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="sale_date" value="{{old('sale_date') ?? $comic->sale_date }}">
                <label for="floatingInput">Date dd/mm/yyyy</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="type" value="{{old('type') ?? $comic->type }}">
                <label for="floatingInput">type</label>
            </div>
            <button type="submit">Send</button>
        </form>
    </div>
</section>
@endsection