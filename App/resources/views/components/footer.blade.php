<!-- Footer component -->
<footer class="text-gray-700 bg-gray-100   ">
    <div class="max-w-3xl mx-auto py-6">

        <img class="flex  mx-auto object-contain h-20 w-20" src="{{asset('storage/images/logo.png')}}">
        <h1 class="text-center text-lg lg:text-2xl">De Scheve scherpschutters</h1>

        <hr class="h-px mt-6 bg-red-800">

        <div class="flex justify-center mt-6">

            <div class="flex flex-col">

                @if(Session::has('Gelukt'))

                <div class="alert alert-succes bg-green-500 p-3 rounded" role="alert">
                    {{Session::get('Gelukt')}}
                </div>
                @endif

                <h1 class="mb-2">Meld je aan voor onze nieuwsbrief.</h1>

                <div class="bg-white rounder-md">

                    <div class="flex flex-wrap justify-between md:flex:row ">
                        <form method="post" action="{{url('newsletter/store')}}">
                            @csrf
                            <input type="text" name="email"
                                class="m-1 p-2 appearance-none rounded text-gray-700 text-sm focus:outline-none focus:placeholder-transparant "
                                placeholder="email">
                            <button type="submit"
                                class="w-full m-1 p-2 text-sm bg-red-800 text-white rounded font-semibold uppercase lg:w-auto hover:bg-gray-700 hover:text-white">Subscribe</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <hr class="h-px mt-6 bg-red-800">

        <div class="flex flex-col items-center justify-between mt-6 flex-row">

            @foreach ($pages as $page)
            <div>
                <a href="{{$page->slug}}">{{$page->title}}</a>

            </div>
            @endforeach


            <div class="mt-6">
                © Dante Weverbergh 2021
            </div>



        </div>

    </div>


</footer>
