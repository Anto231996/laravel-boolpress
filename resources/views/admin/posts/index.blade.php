@extends('layouts.app')

@section('content')
<section class="container pt-5">
    <div class="row text-center mb-5">
        <a href="{{Route('admin.posts.create')}}">Aggiungi post</a>
    </div>
    <div class="row">
        @foreach ($posts as $post)
        <div class="d-flex align-items-center flex-column col-4 mb-4">
            <a href="{{Route('admin.posts.show', $post)}}">
            @if (str_starts_with($post->image_url, 'http://') || str_starts_with($post->image_url, 'https://'))
                <img src="{{ $post->image_url }}" alt="random picture of {{ $post->author }}" style="width: 350px; height:350px">
            @else
                <img src="{{ asset('/storage') . '/' . $post->image_url }}" alt="random picture of {{ $post->author }}" style="width: 350px; height:350px">
            @endif
            </a>
            <div class="text-center">
                <h2>{{ $post->title }}</h2>
                <h4>{{ $post->author }}</h4>
                <h6>Categoria:</h6>
                @foreach ($post->categories as $category)
                    <p>{{ $category->name }}</p>
                @endforeach
                <a href="{{Route('admin.posts.show', $post)}}">Info</a>
                <a href="{{Route('admin.posts.edit', $post)}}">Modifica</a>
                <form action="{{Route('admin.posts.destroy', $post)}}" method="POST">
                    @csrf
                    @method ('DELETE')
                    <input type="submit" value="Delete" class="btn-sm btn-danger text-white">
                </form>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection