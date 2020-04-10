<div class="card my-2" style="width: 18rem;">
    @if($post->media)
        <img src="{{ $post->media }}" class="card-img-top" alt="{{ $post->nom }}">
    @endif
    <div class="card-body">
        <strong class="mb-2 d-block">
            Par {{$post->auteur->name}} 
            <em class="float-right">{{$post->categorie->nom}} </em>
        </strong>
        <em class="mb-2 d-block">{{$post->likes->count()}} likes</em>
        
        @if($post->userliked())
            {{-- bouton unlike --}}
            <form method="post" action="/posts/{{$post->id}}/unlike">
                @csrf
                <input type="submit" value="unliker">
            </form>
        @else
            {{-- bouton like --}}
            <form method="post" action="/posts/{{$post->id}}/like">
                @csrf
                <input type="submit" value="liker">
            </form>
        @endif
        

        <p class="card-text">{{ $post->description }}</p>
        @if($afficherBtVoir)
            <a href="/posts/{{$post->id}}">Voir</a>
        @endif
    </div>
</div>
