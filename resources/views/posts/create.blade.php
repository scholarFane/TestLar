@extends('layouts.app')

@section('content')
	<h1>Create Posts</h1>
	{!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST']) !!}
	<div class="form-group">
		{{Form::label('title', 'Title')}}
		{{form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}

	</div>
	<div class="form-group">
		{{Form::label('body', 'Body')}}
		{{form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body'])}}

	</div>
	{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
   
{!! Form::close() !!}
@endsection