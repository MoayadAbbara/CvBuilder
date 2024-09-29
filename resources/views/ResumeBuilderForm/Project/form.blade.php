@extends("Layouts.builderForm")


@section("content")


@include('Partial._formStepper')



<form action="{{route('project.form.submit')}}" method="POST" class="w-full max-w-3xl mt-6 mx-auto">
    @csrf
    @method('POST')
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                Project Name
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="name" type="text" placeholder="Amazon.com" name="name">
            {{-- <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p> --}}
        </div>
    </div>


    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="link">
                Project Link
            </label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="link" type="text" placeholder="Amazon.com" name="link">
            {{-- <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p> --}}
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
            <div class="mt-2">
                <input type="checkbox" name="ongoing" id="ongoing" class="h-4">
                <label for="ongoing">Ongoing</label>
            </div>
        </div>
    </div>




    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
        Details
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


@push('scripts')

<script>
    const ongoingCheckbox = document.getElementById('ongoing');
    const endDateInput = document.getElementById('end-date');

    ongoingCheckbox.addEventListener('change', function () {
        if (this.checked) {
            endDateInput.disabled = true;
            endDateInput.value = '';  // Clear the date when disabled
        } else {
            endDateInput.disabled = false;
        }
    });
</script>

@endpush