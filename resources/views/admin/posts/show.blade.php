@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                {{ $post->author }}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->content }}</p>
                <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Back</a>
                <a href="{{ route('admin.posts.index') }}" class="btn btn-success">edit</a>
                <a class="btn btn-danger">delete</a>
            </div>
            <div class="card-footer text-muted">
                {{ $post->date }}
            </div>
        </div>
    </div>
@endsection
