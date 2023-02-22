@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center g-4">
            @foreach ($posts as $post)
                <div class="col-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $post->title }}</h5>
                            <p class="card-title">{{ $post->content }}</p>
                            <h5 class="card-title">{{ $post->date }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        @endsection
