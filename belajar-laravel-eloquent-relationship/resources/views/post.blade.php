@extends('layouts/main')

@section('container')
    <article>
        <h2>{{ $post['title'] }}</h2>
        <p>By. Akbar Angkasa in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        
        {!! $post['body'] !!}
    </article>

    <a href="/blog">Kembali ke posts</a>
@endsection