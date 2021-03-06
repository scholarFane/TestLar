@extends('layouts.app')

@section('content')
	<h1>Edit Posts</h1>
	{!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST']) !!}
	<div class="form-group">
		{{Form::label('title', 'Title')}}
		{{form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}

	</div>
	<div class="form-group">
		{{Form::label('body', 'Body')}}
		{{form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Body'])}}

	</div>
	{{Form::hidden('_method', 'PUT')}}
	{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
   
{!! Form::close() !!}
@endsection