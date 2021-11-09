<header>
    <nav class="bg-gray-100">
        <div class="max-w-6xl mx-auto">
            <div class="flex justify-between mx-5">
                <div class=" md:flex flex items-center space-x-3">
                    <a class="py-4 px-2 text-gray-700 hover:text-red-800"
                        href="{{route('dashboard.index')}}">Dashboard</a>
                        <a class="py-4 px-2 text-gray-700 hover:text-red-800" href="{{route('dashboard.order')}}">Bestellingen</a>


                </div>
                <div class=" md:flex flex items-center space-x-3">
                        <a class="py-4 px-2 text-gray-700 hover:text-red-800" href="{{route('home')}}">Terug naar website</a>

                    <div>
                        <a class="w-full m-1 p-2 text-sm bg-red-800 text-white rounded font-semibold uppercase lg:w-auto hover:bg-gray-700 hover:text-white"
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
