@extends("Layouts.builderForm")


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



<div class="max-w-2xl mx-auto mt-8">
    <h2 class="my-8 text-xl font-semibold font-mono">Experiences</h2>
    @if($experinces)
    @foreach ($experinces as $index => $item)
    <div
        class="flex gap-3 bg-white border border-gray-300 rounded-xl overflow-hidden items-center justify-between my-4">

        <div class="flex items-center">
            <div
                class="relative w-16 h-16 flex-shrink-0 bg-blue-200 rounded-full mx-2 flex items-center justify-center">
                <span class="text-xl font-bold">{{$index + 1}}</span>
            </div>

            <div class="flex flex-col gap-2 py-2">
                <p class="text-xl font-bold">{{$item['position']}}</p>
                <p class="text-gray-500">
                    <i class="fa-solid fa-calendar-days"></i>
                    @php
                    $date = new \DateTime($item['startdate']);
                    @endphp
                    {{ $date->format('M Y') }}
                    -
                    @php
                    $date = new \DateTime($item['enddate']);
                    @endphp
                    {{ $date->format('M Y') }}
                    | <i class="fa-solid fa-location-dot"></i>
                    {{$item['location']}}
                </p>
                <span class="flex items-center justify-start text-gray-500">
                    <i class="fa-solid fa-building mr-1"></i>
                    {{$item['company']}}
                </span>
            </div>
        </div>

        <div class="flex gap-2 pr-4">
            <button
                class="w-8 h-8 flex items-center justify-center bg-gray-100 rounded-full text-gray-500 hover:bg-blue-100 hover:text-blue-600">
                <i class="fa-solid fa-pen"></i>
            </button>
            <button
                class="w-8 h-8 flex items-center justify-center bg-gray-100 rounded-full text-gray-500 hover:bg-red-100 hover:text-red-600">
                <i class="fa-solid fa-trash"></i>
            </button>
        </div>
    </div>
    @endforeach

    @else
    <div class="container flex flex-wrap justify-between items-center mx-auto bg-white rounded-md">
        <div class="text-center border-dashed border-2 border-slate-200 dark:border-black rounded-md w-full p-20">
            <p class="text-xl mb-2 uppercase font-bold dark:text-black">No Experience</p>
            <spam class="text-m text-slate-400 block mb-10 dark:text-black">Add Your Pervious Experience For Your Cv
            </spam>
        </div>
    </div>
    @endif
    <div class="flex items-center justify-between mt-4">
        <a href="form/2" class="text-gray-500"><i class="fa-solid fa-circle-plus"></i> Add New Experience</a>
        <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
            Next
        </button>
    </div>
</div>






@endsection