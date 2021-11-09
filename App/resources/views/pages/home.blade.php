@extends('layouts.master')


@section('content')

<div>
    <div class="flex items-center justify-center">
        <img src="img/logo.png" class="w-48 object-contain" alt="logo">
    </div>
    <div class="text-center text-5xl font-extrabold mb-5">
        <h1>De scheve scherpschutters</h1>
    </div>

</div>

<hr class="h-1 m-12 bg-red-800">


<div class="grid grid-cols-1 md:grid-cols-3 ml-10 mr-10">

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


<div class="mt-12 mb-12">
    <img class="mt-20" src="img/club.jpg" alt="clubfoto">

</div>

<div>
    <div class="text-center text-5xl font-extrabold mt-24">
        <h1>Bedankt aan onze sponsors</h1>
    </div>
    <ul class="flex justify-center grid grid-cols-1 md:grid-cols-3 ">
        @foreach ($sponsors as $sponsor)
        <li class="m-24 flex  justify-center text-center">
            <a href="{{$sponsor->url}}" target="_blank">

                <img class="h-20 object-contain" src="{{$sponsor->logo}}" alt="LZV_logo">
                <br>
                {{$sponsor->name}}
            </a>
        </li>
        @endforeach

    </ul>
</div>







@endsection
