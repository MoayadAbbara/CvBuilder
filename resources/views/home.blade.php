@extends('Layouts.main')
@section('content')

{{-- <div class="container-fluid px-0">
    <div class="row flex-lg-row-reverse align-items-center g-0">
        <div class="col-12 col-lg-6">
            <img src="{{ asset('images/hero-image.jpg') }}" class="d-block w-100 img-fluid" alt="Bootstrap Themes"
                loading="lazy">
        </div>
        <div class="col-12 col-lg-6 text-center text-lg-start p-4 p-lg-5">
            <h1 class="display-5 fw-bold lh-1 mb-3">Provide just a few keywords, and let AI craft the perfect resume for
                you!</h1>
            <p class="lead">Stand out with a personalized, polished CV in minutes. Just input your key skills,
                experience, and let our AI handle the rest—easy, fast, professional and Free !</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Start Build Your CV</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Get More Info</button>
            </div>
        </div>
    </div>
</div> --}}


<div class="bg-white flex relative z-20 items-center overflow-hidden">
    <div class="container mx-auto px-6 flex flex-col md:flex-row py-16" style="padding-top:0;">
        <div class="sm:w-2/3 lg:w-3/5 flex flex-col relative z-20 mb-8 mt-20 md:mb-0">
            <span class="w-20 h-2 bg-gray-800 dark:bg-blue-500 mb-12"></span>
            <h1 class="font-bebas-neue uppercase text-6xl sm:text-4xl font-black leading-none text-gray-800">
                Provide just a few keywords, and let AI craft the perfect
                <span class="text-5xl sm:text-6xl dark:text-blue-500">resume</span>
                for you!
            </h1>
            <p class="text-sm sm:text-base text-gray-700 dark:text-black">
                Stand out with a personalized, polished CV in minutes. Just input your key skills, experience, and
                let our AI handle the rest—easy, fast, professional, and free!
            </p>
            <div class="flex mt-8">
                <a href="#"
                    class="uppercase py-2 px-4 rounded-lg bg-blue-500 border-2 border-transparent text-white text-md mr-4 hover:bg-blue-800">
                    Get started
                </a>
                <a href="#"
                    class="uppercase py-2 px-4 rounded-lg bg-transparent border-2 border-blue-800 dark:text-blue-800 hover:bg-blue-800 hover:text-white text-md">
                    Read more
                </a>
            </div>
        </div>
        <div class="hidden sm:block sm:w-1/3 lg:w-3/5 relative">
            <img src="{{ asset('images/hero-image.jpg') }}" class="max-w-full h-auto" alt="Hero Image" />
        </div>
    </div>
</div>



@endsection