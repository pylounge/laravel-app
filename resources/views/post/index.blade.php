@extends('layouts.main', ['title' => 'Заголовок'])

@section('content')
    @foreach ($posts as $post)
    <div><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></div>
    @endforeach
@endsection