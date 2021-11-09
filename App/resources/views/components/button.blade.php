<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full m-1 p-2 text-sm bg-red-800 text-white rounded font-semibold uppercase lg:w-auto hover:bg-gray-700 hover:text-white']) }}>
    {{ $slot }}
</button>
