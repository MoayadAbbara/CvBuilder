@extends("Layouts.builderForm")


@section("content")


@include('Partial._formStepper')



<form action="{{route('experience.form.submit')}}" method="POST" class="w-full max-w-3xl mt-6 mx-auto">
    @csrf
    @method('POST')
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="Position">
                Position
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="Position" type="text" placeholder="Software Developer | UI-UX Designer | Data Anlayst"
                name="position">
            {{-- <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p> --}}
        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="company">
                Company
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                id="company" type="text" placeholder="Microsoft - Apple" name="company">
            {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
        </div>
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="location">
                Location
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="location" type="text" placeholder="London-UK" name="location">

        </div>
    </div>

    <div class="flex flex-wrap -mx-3 mb-10">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="start-date">
                Start Date
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="start-date" type="date" placeholder="john.doe@example.com" name="startdate">
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="end-date">
                End Date
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="end-date" type="date" name="enddate">
        </div>

    </div>
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
        Professional Summary
    </label>
    <textarea id="editor" name="details">
            </textarea>

    <div class="text-right mt-4">
        <button class="bg-blue-500 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded">
            Save <i class="fa-solid fa-arrow-right"></i>
        </button>
    </div>
</form>


@endsection