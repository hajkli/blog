@if($post->tags)
    <p class="tags">
        @foreach($post->tags as $tag)
            <a href="/tag/{{$tag->id}}" class="btn btn-warning btn-xs">
                <small>{{$tag->name}}</small>
            </a>
        @endforeach
    </p>
@endif