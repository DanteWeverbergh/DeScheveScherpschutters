@extends('layouts.master')


@section('content')




<section class="mb-32 mt-32 ml-5 mr-5">
    <div class="  max-w-6xl mx-auto">

        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="">
                    <div class="bg-gray-100 p-3 rounded">
                        <div class="text-5xl font-extrabold text-center ">
                            Contacteer ons
                        </div>
                        <hr class="h-px mt-6 bg-red-800 ml-5 mr-5">
                        <div class="card-body">

                            @if(Session::has('message_sent'))

                            <div class="bg-green-500 px-3 py-2" role="alert">
                                {{Session::get('message_sent')}}
                            </div>


                            <a href=""></a>

                            @endif

                            <form action="{{route('contact.send')}}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="from-group">
                                    <label class="mt-4 text-gray-700" for="name">Naam</label>
                                    <input placeholder="John Doe" type="text" name="name"
                                        class="bg-white appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-red-800 ">
                                </div>
                                <div class="from-group">
                                    <label class="mt-4 text-gray-700" for="email">Email</label>
                                    <input placeholder="johndoe@email.com" type="email" name="email"
                                        class="bg-white appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-red-800">
                                </div>
                                <div class="from-group">
                                    <label class="mt-4 text-gray-700" for="msg">Bericht</label>
                                    <textarea placeholder="Begin hier met typen..." name="msg"
                                        class="bg-white appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-red-800 h-48"></textarea>
                                </div>
                                <button type="submit"
                                    class="p-2 rounded text-white bg-red-800 mt-4 font-extrabold hover:bg-gray-700 ">Verzenden</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


@endsection
