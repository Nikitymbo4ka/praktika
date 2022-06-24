@extends('layouts.app')

@section('content')
    @foreach($posts as $post)
        <div class="content-posts">
        <p class="posts">{{ $post->title }}<br><br><br><br> {{ $post->description }}</p> <br> <br>
        </div>
    @endforeach
@endsection
