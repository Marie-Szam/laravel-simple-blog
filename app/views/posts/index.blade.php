@extends('layouts.master')

@section('content')
    @foreach ($posts as $post)
    <h2>{{ $post->title }}</h2>
    <h4>{{ $post->author['first_name'] }}</h4>
    <p>{{ $post->body }}</p>
	@endforeach
@stop