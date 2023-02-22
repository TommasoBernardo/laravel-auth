@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-striped table-hover mt-5">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">date</th>
                    <th scope="col">
                        <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">create a new post</a>
                    </th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->author }}</td>
                        <td>{{ $post->date }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('admin.posts.show', $post->id) }}">Show</a>

                            <a class="btn btn-success" href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
