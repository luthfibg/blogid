@props(['active' => false])

<a {{ $attributes }} 
   class="relative px-3 py-2 text-sm font-medium transition duration-300 ease-in-out 
          text-gray-600 hover:text-gray-700 {{ $active ? 'text-gray-700' : '' }} 
          after:content-[''] after:absolute after:bottom-0 after:left-0 
          after:h-[2px] after:bg-primary-300 after:transition-all 
          {{ $active ? 'after:w-[80%] after:translate-x-2' : 'after:w-0 hover:after:w-[80%] hover:after:translate-x-2' }}"
   aria-current="{{ request()->is('home') ? 'page' : 'false' }}">
    {{ $slot }}
</a>
