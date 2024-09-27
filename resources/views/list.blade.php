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

<h2 class="mx-12 my-8 text-xl font-semibold font-mono">Experiences</h2>

<div class="max-w-2xl mx-auto mt-8">
    @foreach ($experinces as $index => $item)
    <div class="flex gap-3 bg-white border border-gray-300 rounded-xl overflow-hidden items-center justify-start my-4">

        <div class="relative w-16 h-16 flex-shrink-0 bg-blue-200 rounded-full mx-2 flex items-center justify-center">
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
                {{-- <svg class="w-4 h-4 mr-1 mt-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z"
                        clip-rule="evenodd"></path>
                </svg> --}}
                <i class="fa-solid fa-building"></i>
                {{$item['company']}}
            </span>

        </div>

    </div>
    @endforeach
</div>






@endsection