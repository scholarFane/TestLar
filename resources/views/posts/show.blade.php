@extends('layouts.app')

@section('content')
	<a href="/posts" class="btn btn-primary">Go back</a>
	<h1>{{$post->title}}</h1>
	<small>Written on {{$post->created_at}}</small>
	<hr>
	<p>{!! nl2br(e($post->body)) !!}</p>
	<hr>
@endsection