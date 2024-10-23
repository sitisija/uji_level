@extends('backend.layout.master')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <h2>Edit Blog</h2>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p class="text-danger">{{ $error }}</p>
                @endforeach
            @endif

            <form class="user" action="{{ route('backend.blog.aksi_edit', $blogs->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="title" class="form-control form-control-user" placeholder="Masukkan judul" value="{{ old('title', $blogs->title) }}">
                </div>

                <div class="form-group">
                    <textarea name="description" class="form-control editor" placeholder="Masukkan deskripsi" cols="30" rows="3">{{ old('description', $blogs->description) }}</textarea>
                </div>

                <div class="form-group">
                    <input type="file" name="file" accept=".jpg, .png, .pdf, .docx" class="form-control form-control-user">
                </div>

                <div>
                    <button type="submit" class="btn btn-primary btn-user">Edit</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script>
        var ext_toolbar = ['heading', '|', 'bold', 'italic', 'link', 'numberedList', 'bulletedList', '|', 'outdent', 'indent', '|', 'undo', 'redo', '|', 'uploadImage', 'insertTable', 'alignment'];

        ClassicEditor
            .create(document.querySelector('.editor'), {
                alignment: {
                    options: ['left', 'right']
                },
                toolbar: ext_toolbar
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(err => {
                console.error(err.stack);
            });
    </script>
@endsection
