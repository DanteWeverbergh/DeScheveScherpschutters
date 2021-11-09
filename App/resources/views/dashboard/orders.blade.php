@extends('layouts.dashboard')


@section('content')

<div class="max-w-6xl mx-auto ">






        <div class="mb-10 ml-5 mr-5">
            <div class="bg-gray-100 p-2 rounded mb-3">
                <h1>Bestellingen</h1>
            </div>
            <table class="table table-auto mb-5">
                <thead class="bg-gray-100">
                    <tr>
                        <th width="50">ID</th>
                        <th width="200">Product</th>
                        <th width="300">Naam</th>
                        <th width="300">Email</th>
                        <th width="600">Adress </th>


                    </tr>
                </thead>
                <tbody>

                    @foreach ($orders as $order)

                    <tr class="border-b">
                        <td class="font-bold bg-gray-100 py-3 px-5 ">{{$order->id}}</td>
                        <td class="py-3 px-5">{{$order->product}}</td>
                        <td class="py-3 px-5 ">{{$order->name}}</td>
                        <td class="py-3 px-5">{{$order->email}} </td>

                        <td class="py-3 px-5">{{$order->street}}, {{$order->postalcode}} {{$order->city}}</td>


                    </tr>

                    @endforeach
                </tbody>
            </table>

    </div>
</div>

@endsection
