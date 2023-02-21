@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf

            <h4 class="fw-bold">
                Autore: {{ Auth::user()->name }}
            </h4>
            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input type="text" class="form-control" id="title" placeholder="the lord of kings" name="title">
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">data</label>
                <input type="date" class="form-control" id="date" rows="15" name="date"></input>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Example textarea</label>
                <textarea class="form-control" id="content" rows="15" name="content"></textarea>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-info">
                    submit your film
                </button>
            </div>


        </form>
    </div>
@endsection
