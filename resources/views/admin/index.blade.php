@extends('layouts.admin')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
                        <h3>Waiting List</h3>
                        @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                            <tr>
                                <th>{{$post->title}}</th>
                                <th><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit</a></th>
                                <th>
                                {!! Form::open(['action' => ['App\Http\Controllers\Admin\AdminPostsController@update', $post->id], 'method' => 'POST']) !!}
                                {{Form::hidden('_method', 'PUT')}}
                                {{Form::submit('Submit', ['class' => 'btn btn-danger'])}}
                                {!! Form::close() !!}
                                </th>
                            </tr>
                            @endforeach
                        </table>
                        @else
                        <p>You have no post.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection