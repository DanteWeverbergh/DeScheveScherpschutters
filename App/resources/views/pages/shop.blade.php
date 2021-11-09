@extends('layouts.master')


@section('content')



<div class="h-100 ">
    <section class="md:h-full flex items-center text-gray-700">

        @if (Session::has('Betaling gelukt'))
        <div class="bg-green-500 px-3 py-2" role="alert">
            {{Session::get('Betaling gelukt')}}
        </div>

        @endif

        <div class="container px-5 py-24 mx-auto">

            {!!$page->intro!!}



            <div class="flex flex-wrap -m-4">

                @foreach ($products as $product)

                <div class="p-4 sm:w-1/2 lg:w-1/3">
                    <div class="h-full border-2 border-red-800 border-opacity-60 rounded-lg overflow-hidden">


                        <div class="ml-5 mr-5 mb-5 mt-5">
                            <h2
                                class="float-right flex justify-center items-center w-10 h-10 text-base font-medium text-white mb-1  rounded-full bg-red-800">
                                €{{($product->price)/10}}</h2>
                            <h1 class="text-2xl font-semibold mb-3">{{$product->name}}</h1>
                            <div class="leading-relaxed mb-3 mr-16"> {!!$product->description!!}</div>

                            <div class=" flex-items-center flex-wrap">
                                <a href="/checkout/form/{{$product->id}}"
                                    class=" w-full m-1 p-2 text-sm bg-red-800 text-white rounded font-semibold uppercase lg:w-auto hover:bg-gray-700 hover:text-white">Bestellen</a>
                            </div>
                        </div>


                    </div>

                </div>

                @endforeach

            </div>
        </div>




    </section>
    <!-- dropdown menu
    <div>
<select name="" id="">
        @foreach ($products as $product)
            <option  value="{{$product->id}}">{{$product->name}}</option>
        @endforeach
    </select>
    </div>
-->


</div>




@endsection
