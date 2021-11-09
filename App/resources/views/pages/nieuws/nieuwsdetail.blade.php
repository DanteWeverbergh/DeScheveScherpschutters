@extends('layouts.master')


@section('content')

<div>
    <div class="max-w-4xl mx-auto ">
        <div class="ml-8 mr-8">

            <div>
                <a class="" href="{{ url()->previous() }}">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-10 w-10 bg-red-800 rounded-full text-white p-2 hover:bg-gray-700 font-extrabold"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </a>
            </div>
            <div class=" ">
                <h1 class="text-5xl font-extrabold mt-5 mb-4">{{$post->title}}</h1>
                <hr class="h-2 mt-6 bg-red-800">
                <div class="">
                    <p class="mb-10 ">
                        {!!$post->article!!}
                    </p>
                    <div class="mt-10">
                        @if ($post->name)
                        <img src="{{asset('storage/images/' . $post->name)}}">
                        @else

                        @endif

                        <div class="mb-24"></div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    @endsection
