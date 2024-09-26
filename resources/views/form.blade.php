@extends("Layouts.main")


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

@section("content")


<div class="flex w-full justify-center">
    <ol class="lg:flex items-center w-full max-w-8xl space-y-4 lg:space-y-0">
        <li class="flex-1">
            <a href="#" class="flex items-center font-medium px-4 py-5 w-full rounded-lg bg-blue-50">
                <span
                    class="w-16 h-16 bg-blue-500 rounded-full flex justify-center items-center mr-3 text-sm text-white lg:w-14 lg:h-10">01</span>
                <h4 class="text-base text-blue-500">Personal Information</h4>
            </a>
        </li>
        <li class="flex-1">
            <a class="flex items-center font-medium px-4 py-5 w-full">
                <span
                    class="w-8 h-8 bg-gray-50 border border-gray-200 rounded-full flex justify-center items-center mr-3 text-sm lg:w-10 lg:h-10">02</span>
                <h4 class="text-base text-gray-900">Experience</h4>
            </a>
        </li>
        <li class="flex-1">
            <a class="flex items-center font-medium px-4 py-5 w-full">
                <span
                    class="w-8 h-8 bg-gray-50 border border-gray-200 rounded-full flex justify-center items-center mr-3 text-sm lg:w-10 lg:h-10">03</span>
                <h4 class="text-base text-gray-900">Education</h4>
            </a>
        </li>
        <li class="flex-1">
            <a class="flex items-center font-medium px-4 py-5 w-full">
                <span
                    class="w-8 h-8 bg-gray-50 border border-gray-200 rounded-full flex justify-center items-center mr-3 text-sm lg:w-10 lg:h-10">04</span>
                <h4 class="text-base text-gray-900">Skills</h4>
            </a>
        </li>
        <li class="flex-1">
            <a class="flex items-center font-medium px-4 py-5 w-full">
                <span
                    class="w-8 h-8 bg-gray-50 border border-gray-200 rounded-full flex justify-center items-center mr-3 text-sm lg:w-10 lg:h-10">05</span>
                <h4 class="text-base text-gray-900">Projects</h4>
            </a>
        </li>

        <li class="flex-1">
            <a class="flex items-center font-medium px-4 py-5 w-full">
                <span
                    class="w-8 h-8 bg-gray-50 border border-gray-200 rounded-full flex justify-center items-center mr-3 text-sm lg:w-10 lg:h-10">06</span>
                <h4 class="text-base text-gray-900">Languages</h4>
            </a>
        </li>
    </ol>
</div>



<form action="{{route('blabla')}}" method="POST" class="w-full max-w-3xl mt-6 mx-auto">
    @csrf
    @method('POST')
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                Job Title
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-password" type="text" placeholder="Software Developer | UI-UX Designer | Data Anlayst"
                name="job-title">
            {{-- <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p> --}}
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                First Name
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                id="grid-first-name" type="text" placeholder="Jane" name="fname">
            {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
        </div>
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                Last Name
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-last-name" type="text" placeholder="Doe" name="lname">

        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-10">
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                Email
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-city" type="email" placeholder="john.doe@example.com" name="email">
        </div>
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                Phone Number
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-zip" type="text" placeholder="+905512345678" name="phone">
        </div>

        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                City-Country
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-zip" type="text" placeholder="Istanbul-Turkey" name="address">
        </div>
    </div>
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
        Professional Summary
    </label>
    <textarea id="editor" name="summary">
            </textarea>

    <div class="text-right mt-4">
        <button class="bg-blue-500 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded">
            Next <i class="fa-solid fa-arrow-right"></i>
        </button>
    </div>
</form>


@endsection

@section("scripts")

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
            .create(document.querySelector('#editor'), {
                plugins: [Essentials, Bold, Italic, Font, Paragraph, List],
                toolbar: [
                    'undo', 'redo', '|', 'bold', 'italic', '|',
                    'fontSize', 'fontFamily', '|',
                    'bulletedList', 'numberedList'
                ],
            })
            .then(/* ... */)
            .catch(/* ... */);
</script>

@endsection