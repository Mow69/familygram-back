@extends("layouts.app")

@section("titre","Edition du post ".$post->id)

@section("contenu")

<form method="POST" action="/posts/{{$post->id}}" enctype="multipart/form-data">

    @csrf
    @method("PUT")

    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control {{ $errors->has("nom") ? "border border-danger" : "" }}" name="nom" id="nom" value="{{ $post->nom }}">
        @if($errors->has("nom"))
            <p class="text-danger">{{ $errors->first("nom") }}</p>
        @endif
    </div>

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Image</label>
                <div class="custom-file {{ $errors->has("media") ? "border border-danger" : "" }}">
                    <input type="file" class="custom-file-input " name="media" id="media" value="{{ old("media") }}">
                    <label class="custom-file-label" for="media"></label>
                </div>
                @if($errors->has("media"))
                    <p class="text-danger">{{ $errors->first("media") }}</p>
                @endif
            </div>
        </div>
        <div class="col">
            <div id="preview"></div>
        </div>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control @error("description") border border-danger @enderror" name="description" id="description">{{ $post->description }}</textarea>
        @error("description")
            <p class="text-danger">{{ $errors->first("description") }}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="tags">Tags</label>

        @foreach($tags as $tag)

            <div class="custom-control custom-checkbox">
                <input value="{{ $tag->id }}" type="checkbox" id="{{$tag->slug}}" name="tags[]" class="custom-control-input" 
                    @if($post->tags->pluck("nom")->contains($tag->nom)) checked @endif>
                <label for="{{$tag->slug}}" class="custom-control-label">{{ $tag->nom }}</label>
            </div>
            
        @endforeach
        @error("tags")
            <p class="text-danger">{{ $errors->first("tags") }}</p>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Modifier le post</button>
    
</form>

@endsection