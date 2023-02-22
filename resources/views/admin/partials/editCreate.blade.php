<form action="{{ route($routeAddress, $post) }}" method="POST">
    @csrf
    @method($method)

    <h4 class="fw-bold">
        Autore: {{ Auth::user()->name }}
    </h4>
    <div class="mb-3">
        <label for="title" class="form-label">title</label>
        <input type="text" class="form-control" id="title" placeholder="the lord of kings" name="title"
            value="{{ old('title', $post->title) }}">
    </div>

    <div class="mb-3">
        <label for="date" class="form-label">data</label>
        <input type="date" class="form-control" id="date" rows="15" name="date"
            value="{{ old('date', $post->date) }}">
    </div>

    <div class="mb-3">
        <label for="content" class="form-label">Example textarea</label>
        <textarea class="form-control" id="content" rows="15" name="content">{{ old('content', $post->content) }}"</textarea>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-info">
            submit your film
        </button>
    </div>
</form>

<div>
    <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Back</a>
</div>

</div>
