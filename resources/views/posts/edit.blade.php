@extends('layout.post')
@section('content')
    <div class="container mt-5 mb-5">
    <h3><a href="{{ route('posts.index') }}"><i class="bi bi-arrow-left-circle text-black"></i></a> Update Post</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('posts.update', $post->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ $post->title }}">
                            </div>
                            <div class="form-group">
                            <label for="body">Body</label>
                            <textarea class="form-control" id="body" name="body">{{ $post->body }}</textarea>
                            </div>
                            <button type="submit" class="btn mt-3 btn-primary">Update Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection