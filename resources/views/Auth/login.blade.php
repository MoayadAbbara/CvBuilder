@extends('Layouts.main')

@section('content')

<div class="flex flex-col justify-center font-[sans-serif] sm:h-screen p-4">
    <div class="max-w-md w-full mx-auto border border-gray-300 rounded-2xl p-8">
        <div class="text-center mb-12">
            @include('Components.logo')
        </div>
        <form action="{{route('login')}}" method="POST">
            @csrf
            @method('POST')
            <div class="space-y-6">
                <div>
                    <label class="text-gray-800 text-sm mb-2 block">Email</label>
                    <input name="email" type="text"
                        class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-blue-500"
                        placeholder="example@example.com" />
                </div>
                @error('email')
                <div class="text-sm text-red-600">
                    {{ $errors->first('email') }}
                </div>
                @enderror
                <div>
                    <label class="text-gray-800 text-sm mb-2 block">Password</label>
                    <input name="password" type="password"
                        class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-blue-500"
                        placeholder="Enter Password" />
                </div>
                @error('password')
                <div class="text-sm text-red-600">
                    {{ $errors->first('password') }}
                </div>
                @enderror
            </div>

            <div class="!mt-12">
                <button type="submit"
                    class="w-full py-3 px-4 text-sm tracking-wider font-semibold rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
                    Create an account
                </button>
            </div>
            <p class="text-gray-800 text-sm mt-6 text-center">Don't have an account?<a href="{{route('register')}}"
                    class="text-blue-600 font-semibold hover:underline ml-1">Sign up here.</a></p>
        </form>
    </div>
</div>

@endsection