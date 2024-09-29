@extends("Layouts.builderForm")


@section("content")


@include('Partial._formStepper')

<div class="max-w-2xl mx-auto mt-8">
    <h2 class="my-8 text-xl font-semibold font-mono">Education</h2>
    @if(isset($experinces))
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
            <p class="text-xl mb-2 uppercase font-bold dark:text-black">No Education</p>
            <spam class="text-m text-slate-400 block mb-10 dark:text-black">Add Your Pervious Education For Your Cv
            </spam>
        </div>
    </div>
    @endif
    <div class="flex items-center justify-between mt-4">
        <a href="{{route('education.form')}}" class="text-gray-500"><i class="fa-solid fa-circle-plus"></i> Add New
            Education</a>
        <a href="{{route('skill.form')}}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
            Next
        </a>
    </div>
</div>
@endsection