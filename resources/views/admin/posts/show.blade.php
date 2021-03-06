@extends('layouts.app')

@section('content')
<section class="container pt-5">
    <div class="row justify-content-center">
        <div class="items d-flex flex-column align-items-center col-6">
            @if (str_starts_with($post->image_url, 'http://') || str_starts_with($post->image_url, 'https://'))
                <img class="w-50 mb-4" src="{{ $post->image_url }}" alt="random picture of {{ $post->author }}">
            @else
                <img class="w-50 mb-4" src="{{ asset('/storage') . '/' . $post->image_url }}" alt="random picture of {{ $post->author }}">
            @endif
            <div class="text-center">
                <h1>{{ $post->title }}</h1>
                <h3>{{ $post->author }}</h3>
                <h5>{{ $post->content }}</h5>
                <pre>{{ $post->created_at }}</pre>
                <h6>Categoria:</h6>
                @foreach ($post->categories as $category)
                    <pre>{{ $category->name }}</pre>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection