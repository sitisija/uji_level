@extends('layouts.master')
@section('content')
<h1 class="mb-3">Tambah</h1>
        @if ($errors)
            @foreach ($errors->all() as $item)
                <p class="text-danger"> {{ $item }}</p>
            @endforeach
        @endif

        <form class="user" action="{{ route('kategori.aksi_tambah') }}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="form-group mb-3">
                <input type="text" name="title" class="form-control form-control-user" aria-describedby="emailHelp"
                    placeholder="Masukan judul">
            </div>
            <div>
                <button type="submit" class="btn btn-primary btn-user ">
                    Tambah
                </button>
            </div>

        </form>
    </div>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
<script>
    var ext_toolbar = [ 
'heading', '|', 'bold', 'italic', 'link', 'numberedList', 'bulletedList', '|', 'outdent', 'indent', '|', 'undo', 'redo', '|', 'uploadImage', 'insertTable', 'alignment',
]
ClassicEditor
.create( document.querySelector(`.editor`), {
  alignment: {
    options: [ 'left', 'right' ]
  },
  toolbar: ext_toolbar

} )
.then( editor => {
  window.editor = editor;
} )
.catch( err => {
  console.error( err.stack );
} );
</script>
@endsection