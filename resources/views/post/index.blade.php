@extends('layout.post')
@section('content')
<style>
    .action-buttons {
        display: flex;
        gap: 10px; 
    }

    .action-buttons form {
        display: inline;
        margin: 0;
    }
</style>

<a href="{{ route('posts.create') }}" class="btn btn-lg-2 btn-primary mt-3 mb-2">Add New Post</a>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th style="width: 8%; text-align:left;">No.</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td style="width: 8%; text-align:left;">{{ $loop->iteration }}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>
                    <div class="action-buttons">
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                    </form>
                </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection