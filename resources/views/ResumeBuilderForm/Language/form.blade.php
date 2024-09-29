@extends("Layouts.builderForm")


@section("content")


@include('Partial._formStepper')



<form action="{{route('language.form.submit')}}" method="POST" class="w-full max-w-3xl mt-6 mx-auto">
    @csrf
    @method('POST')
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="company">
                Language
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                id="company" type="text" placeholder="Spanish" name="language">
        </div>
        <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="location">
                Location
            </label>
            <select id="countries"
                class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                <option selected>Level</option>
                <option value="US">A1</option>
                <option value="CA">A2</option>
                <option value="FR">B1</option>
                <option value="DE">B2</option>
                <option value="DE">C1</option>
            </select>
        </div>
    </div>


    <div class="text-right mt-4">
        <button class="bg-blue-500 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded">
            Save <i class="fa-solid fa-arrow-right"></i>
        </button>
    </div>
</form>
@endsection