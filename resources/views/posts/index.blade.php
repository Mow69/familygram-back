@extends("layouts.app")

@section("titre","Feed")

@section("contenu")

<div class="row">
    
    @forelse($posts as $post)
        <div class="col d-flex justify-content-center col-sm-6 col-md-4">
            @include("partiels._post",["afficherBtVoir"=>true])
        </div>
    @empty
        <div class="col d-flex justify-content-center col-sm-6 col-md-4">
            <p>Aucun post.</p>
        </div>
    @endforelse

</div>

@auth
    <div class="row my-5">
        <div class="col">
            <hr>
            <a class="btn btn-sm btn-outline-secondary" href="/posts/create">Ajouter un Post</a>
        </div>
    </div>
@endauth


@endsection