@extends('Layouts.main')

@section("styles")
<link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.1.1/ckeditor5.css" />

<style>
    .ck-editor__editable {
        min-height: 200px;
        padding-left: 10px;
    }

    .ck.ck-editor__main>.ck-editor__editable {
        background: #e8e8e8;
    }

    .ck.ck-editor__main>.ck-editor__editable:focus {
        background: white;
    }

    .ck.ck-content ul,
    .ck.ck-content ol {
        padding-left: 40px;
    }
</style>
@endsection


@section('scripts')
<script type="importmap">
    {
            "imports": {
                "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.1.1/ckeditor5.js",
                "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.1.1/"
            }
        }
    </script>

<script type="module">
    import {
            ClassicEditor,
            Essentials,
            Bold,
            Italic,
            Font,
            Paragraph,
            List
        } from 'ckeditor5';
    
        ClassicEditor
            .create( document.querySelector( '#editor' ), {
                plugins: [ Essentials, Bold, Italic, Font, Paragraph,List ],
                toolbar: [
            'undo', 'redo', '|', 'bold', 'italic', '|',
            'fontSize', 'fontFamily', '|',
            'bulletedList', 'numberedList'
                ]
            } )
            .then( /* ... */ )
            .catch( /* ... */ );
</script>

@endsection