<a {{ $attributes }} class="{{ $active ? 'bg-gray-700 text-white' : 'text-gray-600 hover:bg-gray-600 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium text-white transition duration-300 ease-in-out" aria-current={{ request()->is('home') ? 'page' : 'false' }}>
    {{ $slot }}
</a>
