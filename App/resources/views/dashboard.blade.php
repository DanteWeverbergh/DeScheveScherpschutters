@extends('layouts.dashboard')


@section('content')

<div class="max-w-6xl mx-auto ">



    <div class="md:flex md:flex  justify-between">


        <div class="mb-10 ml-5 mr-5">
            <div class="bg-gray-100 p-2 rounded mb-3">
                <h1>Schrijf een nieuwe blogpost</h1>
            </div>
            <table class="table table-auto mb-5">
                <thead class="bg-gray-100">
                    <tr>
                        <th width="50">ID</th>
                        <th width="200">Titel</th>
                        <th width="75"></th>
                        <th width="75"></th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($posts as $post)

                    <tr class="border-b">
                        <td class="font-bold bg-gray-100 py-3 px-5 ">{{$post->id}}</td>
                        <td class="py-3 px-5">{{$post->title}}</td>

                        <td>
                            <a class="w-full m-1 p-2 text-sm bg-gray-700 text-white rounded font-semibold uppercase lg:w-auto hover:bg-red-800 hover:text-white "
                                href="/dashboard/edit/{{$post->id}}">Bewerk</a>
                        </td>
                        <td>
                            <a class="w-full m-1 p-2 text-sm bg-red-800 text-white rounded font-semibold uppercase lg:w-auto hover:bg-gray-700 hover:text-white "
                                href="/dashboard/delete/{{$post->id}}">Verwijder</a>
                        </td>
                    </tr>

                    @endforeach



                </tbody>
            </table>
            <a class="w-full m-1 p-2  text-sm bg-red-800 text-white rounded font-semibold uppercase lg:w-auto hover:bg-gray-700 hover:text-white"
                href="{{route('dashboard.create')}}">Nieuw artikel</a>
        </div>

        <div class="mb-10 ml-5 mr-5">
            <div class="bg-gray-100 p-2 rounded mb-3">
                <h1>Webshop</h1>
            </div>
            <table class="table table-auto mb-5">
                <thead class="bg-gray-100">
                    <tr>
                        <th width="50">ID</th>
                        <th width="200">Product</th>
                        <th width="75">Prijs</th>
                        <th width="75"></th>
                        <th width="75"></th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($products as $product)

                    <tr class="border-b">
                        <td class="font-bold bg-gray-100 py-3 px-5 ">{{$product->id}}</td>
                        <td class="py-3 px-5">{{$product->name}}</td>
                        <td class="py-3 px-5">€{{($product->price)/10}}</td>

                        <td>
                            <a class="w-full m-1 p-2 text-sm bg-gray-700 text-white rounded font-semibold uppercase lg:w-auto hover:bg-red-800 hover:text-white "
                                href="/dashboard/editproduct/{{$product->id}}">Bewerk</a>
                        </td>
                        <td>
                            <a class="w-full m-1 p-2 text-sm bg-red-800 text-white rounded font-semibold uppercase lg:w-auto hover:bg-gray-700 hover:text-white "
                                href="/dashboard/deleteproduct/{{$product->id}}">Verwijder</a>
                        </td>
                    </tr>

                    @endforeach



                </tbody>
            </table>
            <a class="w-full m-1 p-2  text-sm bg-red-800 text-white rounded font-semibold uppercase lg:w-auto hover:bg-gray-700 hover:text-white"
                href="{{route('dashboard.createproduct')}}">Nieuw product</a>
        </div>



    </div>






</div>

@endsection
