@extends( 'layout.app' )

@section('title')
comics | all comics
@endSection

@section( 'content' )


<section class="container-fluid">
    <div class="row p-5 justify-content-between">

        @foreach ($comics as $item)

        <a class="card indexc mb-5" href="{{ route('comics.show', ['comic' => $item->id]) }}">
                <img class="card-img-top imgi" src="{{$item->thumb}}" alt="Title">
                <div class="card-body">
                    <h4 class="card-title text-center">{{$item->title}}</h4>
                    <p class="card-text text-center">{{$item->description}}</p>
                </div>
        </a>
        <form action="{{ route('comics.destroy', $item) }}" method="POST">

            @csrf

            @method('DELETE')
            
            <button class="delete-button">elimina</button>
              
        </form>
        <a class="card-text text-center edit-button" href="{{ route('comics.edit', ['comic' => $item->id]) }}">edit</a>

        @endforeach

    </div>
</section>

@endSection

@push('scripts')
<script>
    let deleteButtons = document.querySelectorAll('.delete-button');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            if (!confirm('Sei sicuro di voler eseguire questa azione?')) {
                event.preventDefault();
            }
        });
    });

    let editButtons = document.querySelectorAll('.edit-button');

    editButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            if (!confirm('Sei sicuro di voler eseguire questa azione?')) {
                event.preventDefault();
            }
        });
    });
</script>

@endpush