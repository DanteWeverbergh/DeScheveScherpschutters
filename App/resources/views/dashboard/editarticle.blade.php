@extends('layouts.dashboard')


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
                            Edit artikel
                        </div>
                        <hr class="h-px mt-6 bg-red-800 ml-5 mr-5">
                        <div class="card-body">



                            <form action="{{route('dashboard.edit', $post->id)}}"  enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="from-group mb-5 mt-5">
                                    <label class="mt-4 text-gray-700"  for="name">Titel</label>
                                    <input placeholder="Titel" type="text" name="title" value="{{$post->title}}" class="bg-white appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-red-800 ">
                                </div>

                                <div class="from-group mb-5">
                                    <label class="mt-4 text-gray-700"  for="photo">Foto</label>
                                    <input  type="file" name="photo" class="bg-white appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-red-800 ">
                                </div>

                                <div class="from-group mb-5">
                                    <label class="mt-4 text-gray-700" for="excerpt">Excerpt</label>
                                    <textarea class="wysiwyg bg-white appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-red-800 " id="content" name="excerpt" placeholder="Begin hier met typen">
                                        {{$post->excerpt}}
                                    </textarea>
                                </div>

                                <div class="from-group ">
                                    <label class="mt-4 text-gray-700" for="article">Artikel</label>
                                    <textarea class="wysiwyg bg-white appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-red-800 " id="content" rows="25" name="article" placeholder="Begin hier met typen">
                                        {{$post->article}}
                                    </textarea>
                                </div>
                                <button  type="submit" class="p-2 rounded text-white bg-red-800 mt-4 font-extrabold hover:bg-gray-700">Opslaan</button>
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

