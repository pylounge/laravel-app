@extends('layouts.main', ['title' => 'Заголовок'])

@section('content')
<div>Заголовок: {{ $post->title }}</div>
<div>Автор: {{ $post->author }}</div>
<div>Контент: {{ $post->content }}</div>
<div>Дата публикации: {{ $post->created_at }}</div>
@endsection