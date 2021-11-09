@extends('layouts.master')


@section('content')



<div class="m-10">


    <h1 class="font-extrabold text-6xl text-center mb-10">
        {{$page->title}}
    </h1>

    <div>

    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 ">


        @foreach ($posts as $post)

        <div class="bg-gray-100 rounded m-2">
            <div class="mt-2 ml-5">
                <a class="text-4xl font-extrabold  " href="nieuws/{{$post->slug}}">
                    {{ $post->title }}
                </a>
            </div>
            <div class="mb-1 ml-5 mr-5 mt-4">
                <p>
                    {{strip_tags($post->excerpt)}}
                </p>
            </div>

            <div class=" flex items-center space-x-1 text-gray-700 space-x-1">
                <a href="nieuws/{{$post->slug}}"
                    class=" font-semibold uppercase py-2 px-3 bg-red-800 text-white rounded hover:text-white hover:bg-gray-700 ml-5 mb-5 mt-4">Meer
                    lezen</a>
            </div>
        </div>
        @endforeach
        <div class="mt-10 ">
            {{$posts->links() }}
        </div>

    </div>


</div>




@endsection
