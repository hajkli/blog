@extends('master')
@section('title', 'Detail of post')

@section('content')

    <section class="box">
        <article class="post full-post">
            <header class="post-header">
                <h1 class="bo-heading">
                    <a href="{{URL::current()}}">{{$post->tittle}}</a> 
                    <time datetime="">
                        <small>{{$post->created_at}}</small>
                    </time>
                </h1>
            </header>
            <div class="post-content">
                <p>
                    {{$post->rich_text}}
                </p>

                <p class="written-by small">
                    <small>
                        <a href="/user/{{$post->user->id}}">
                            {{$post->user->email}}
                        </a>
                    </small>
                </p>
            </div>
            <footer>
                <a href="/post">Back</a>
            </footer>
        </article>
    </section>


@endsection