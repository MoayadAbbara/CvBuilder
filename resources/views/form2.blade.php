@extends("Layouts.main")


@section("content")


<div class="flex w-full justify-center">
    <ol class="lg:flex items-center w-full max-w-8xl space-y-4 lg:space-y-0">
        <li class="flex-1">
            <a href="#" class="flex items-center font-medium px-4 py-5 w-full">
                <span
                    class="w-16 h-16 bg-gray-50 rounded-full flex justify-center items-center mr-3 text-sm lg:w-14 lg:h-10">01</span>
                <h4 class="text-base text-gray-900">Personal Information</h4>
            </a>
        </li>
        <li class="flex-1">
            <a class="flex items-center font-medium px-4 py-5 w-full rounded-lg bg-blue-50">
                <span
                    class="w-8 h-8 bg-blue-500 border border-gray-200 rounded-full flex justify-center text-white items-center mr-3 text-sm lg:w-10 lg:h-10">02</span>
                <h4 class="text-base text-blue-500">Experience</h4>
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



<form id="myForm" class="w-full max-w-4xl mx-auto">
    <!-- Container to hold all the form fields -->
    <div id="formContainer">
        <!-- Initial Form Fields to be duplicated -->
        <div class="personFields flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    First Name
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    name="person[0][first_name]" type="text" placeholder="Jane">
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Last Name
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    name="person[0][last_name]" type="text" placeholder="Doe">
            </div>

            <!-- Additional Fields -->
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email">
                    Email
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    name="person[0][email]" type="email" placeholder="john.doe@example.com">
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-phone">
                    Phone Number
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    name="person[0][phone]" type="text" placeholder="+905512345678">
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                    City-Country
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    name="person[0][city_country]" type="text" placeholder="Istanbul-Turkey">
            </div>
        </div>
    </div>

    <!-- Buttons (Add More Fields and Submit) -->
    <div class="mb-6">
        <button type="button" id="addFields"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Add More
        </button>
    </div>

    <div class="mb-6">
        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            Submit
        </button>
    </div>
</form>


@endsection

@section('scripts')
<script>
    document.getElementById('addFields').addEventListener('click', function () {
// Get the form fields to duplicate
var formFields = document.querySelector('.personFields');

// Clone the node
var clonedFields = formFields.cloneNode(true);

// Get current number of person groups to increment index
var personCount = document.querySelectorAll('.personFields').length;

// Update the name attributes in the cloned fields to match the new index
var inputs = clonedFields.querySelectorAll('input');
inputs.forEach(function(input) {
// Modify the name attribute to match the next group index
input.name = input.name.replace(/\[0\]/, `[${personCount}]`);
// Clear the input value
input.value = '';
});

// Append the cloned fields
document.getElementById('formContainer').appendChild(clonedFields);
});
</script>
@endsection