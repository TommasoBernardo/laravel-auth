@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card text-center">
            <div class="card-header">
                {{ $post->author }}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->content }}</p>
                <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Back</a>
                <a class="btn btn-success" href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
                <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" class="d-inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">delete</button>
                </form>
            </div>
            <div class="card-footer text-muted">
                {{ $post->date }}
            </div>
        </div>
    </div>
@endsection
