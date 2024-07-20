@extends('layout.post')
@section('content')
    <div class="container mt-5 mb-5">
        <h3><a href="{{ route('posts.index') }}"><i class="bi bi-arrow-left-circle text-black"></i></a> Add New Post</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-10">
                    <div class="card-body">
                        <form id="postForm" action="{{ route('posts.store') }}" method="post">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label for="title">Judul</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="body">Deskripsi</label>
                                <textarea class="form-control" id="body" name="body" required></textarea>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Create Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('postForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting normally

            const form = this;

            // Show the SweetAlert
            Swal.fire({
                title: "Post mu sudah dibuat!",
                icon: "success"
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // Submit the form if the alert is confirmed
                }
            });
        });
    </script>
@endsection