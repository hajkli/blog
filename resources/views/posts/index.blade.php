@extends('master')
@section('title', isset($title) ? $title : 'All the posts')

@section('content')
    <h1 class="box-heading text-muted">
        {{$title or 'Blog'}}
    </h1>
    @forelse($posts as $post)

        <section class="box post-list">



            <article id="post-{{$post->id}}" class="post">
                <header class="postheader">
                    <h2>
                        <a href="/post/{{$post->id}}">{{$post->tittle}}</a>
                    </h2>
                    @include('partials.tags')
                    <time>
                        <small>
                            {{$post->created_at}}
                        </small>
                    </time>
                </header>
                <div class="post-content">
                    {{$post->teaser}}
                </div>
                <footer class="post-footer">
                    <a href="/post/{{ $post->id }}" class="read-more">read more</a>
                </footer>
            </article>
        </section>

        <p></p>
    @empty

    @endforelse

@endsection