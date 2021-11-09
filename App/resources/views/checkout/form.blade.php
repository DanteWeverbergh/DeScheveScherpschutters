
@extends('layouts.master')


@section('content')

<div class="max-w-6xl mx-auto ">

    <a class="" href="{{ url()->previous() }}">
        <svg xmlns="http://www.w3.org/2000/svg"
            class="h-10 w-10 bg-red-800 rounded-full text-white p-2 hover:bg-gray-700 font-extrabold"
            fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
    </a>

    <section  class="mb-32" style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="">
                        <div class="bg-gray-100 p-3 rounded">
                        <div class="text-5xl font-extrabold text-center ">
                            Bestellen: {{$product->name}} €{{($product->price)/10}}
                        </div>
                        <hr class="h-px mt-6 bg-red-800 ml-5 mr-5">
                        <div class="card-body">



                            <form action="{{route('formdata', $product->id)}}"  enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="from-group mb-5 mt-5">
                                    <label class="mt-4 text-gray-700"  for="name">Naam</label>
                                    <input placeholder="John Doe" type="text" name="name" class="bg-white appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-red-800 ">
                                </div>
                                <div class="from-group mb-5 mt-5">
                                    <label class="mt-4 text-gray-700"  for="name">Email</label>
                                    <input placeholder="johndoe@email.be" type="email" name="email" class="bg-white appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-red-800 ">
                                </div>
                                <div class="from-group mb-5 mt-5">
                                    <label class="mt-4 text-gray-700"  for="street">Straat + Nr</label>
                                    <input placeholder="Straat 10" type="text" name="street" class="bg-white appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-red-800 ">
                                </div>
                                <div class="from-group mb-5 mt-5">
                                    <label class="mt-4 text-gray-700"  for="postalcode">Postcode</label>
                                    <input placeholder="0000" type="text" name="postalcode" class="bg-white appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-red-800 ">
                                </div>
                                <div class="from-group mb-5 mt-5">
                                    <label class="mt-4 text-gray-700"  for="city">Plaats</label>
                                    <input placeholder="plaats" type="text" name="city" class="bg-white appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-red-800 ">
                                </div>


                                <button  type="submit" class="p-2 rounded text-white bg-red-800 mt-4 font-extrabold hover:bg-gray-700 ">Opslaan</button>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>

@endsection
