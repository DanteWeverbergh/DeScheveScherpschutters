<!-- Header component -->
<nav class="bg-gray-100">
    <div class="max-w-6xl mx-auto ">
        <div class="flex justify-between mx-5">
            <div>

                <a href="{{route('home')}}" class="flex items-center  py-1 px-3 text-gray-700">
                    <img class="object-contain h-20 w-20" src="{{asset('storage/images/logo.png')}}">
                    <span class="font-bold">De sheve scherpschutters</span>
                </a>
            </div>







            <div class="hidden md:flex flex items-center space-x-3">

                @foreach ($pages as $page)
                <a href="{{$page->slug}}" class="py-4 px-2 text-gray-700 hover:text-red-800">{{$page->title}}</a>
                @endforeach

            </div>


            <div class="md:hidden flex items-center">
                <button class="mobile-menu-button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="mobile-menu hidden   text-center">
        @foreach ($pages as $page)
                <a href="{{$page->slug}}" class="block py-2 px-2 text-sm hover:bg-gray-200">{{$page->title}}</a>
                @endforeach
    </div>

</nav>

<!--
Javascript for mobile header
-->
<script>
    const btn = document.querySelector('button.mobile-menu-button');
    const menu = document.querySelector('.mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    })
</script>
