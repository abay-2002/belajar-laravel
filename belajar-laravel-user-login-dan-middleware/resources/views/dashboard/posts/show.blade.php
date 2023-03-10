@extends('dashboard/layouts/main')

@section('container')
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-lg-8">
                <h2 class="mb-3">{{ $post['title'] }}</h2>
                <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left me-1"></i>Back to my all posts</a>
                <a href="" class="btn btn-warning"><i class="bi bi-pencil me-1"></i>Edit</a>
                <a href="" class="btn btn-danger"><i class="bi bi-x-circle me-1"></i>Delete</a>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <a href="/posts" class="d-block mt-3">Kembali ke posts</a>
            </div>
        </div>
    </div>
@endsection