@extends('layouts.master')


@section('content')
<div class="text-center ">
    <div>


        <h1 class="text-center text-5xl font-extrabold mb-5">sponsors</h1>

        <ul class="flex justify-center grid grid-cols-1 md:grid-cols-3 ">
            @foreach ($sponsors as $sponsor)
            <li class="m-24 flex  justify-center">
                <a href="{{$sponsor->url}}" target="_blank">

                    <img class="h-20 object-contain" src="{{$sponsor->logo}}" alt="LZV_logo">
                    <br>
                    {{$sponsor->name}}
                </a>

            </li>

            @endforeach

        </ul>

    </div>

</div>


@endsection
