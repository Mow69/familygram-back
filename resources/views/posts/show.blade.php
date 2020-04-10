@extends("layouts.app")

@section("titre","Post " . $post->id)

@section("contenu")

<div class="row">
    <div class="col d-flex justify-content-center">
        @include("partiels._post",["afficherBtVoir"=>false])
    </div>
</div>

{{-- @auth
    <div class="row mb-5">
        <div class="col">
            <hr>
            <a class="btn btn-sm btn-outline-secondary" href="/post/{{ $post->id }}/edit">Modifier</a>
            <form method="POST" action="/post/{{ $post->id }}" class="d-inline">
                @csrf
                @method("DELETE")
                <input type="submit" class="btn btn-sm btn-outline-danger" value="Supprimer">
            </form>
        </div>
    </div>
@endauth --}}

@endsection
