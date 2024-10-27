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


{{-- <style>
    .active-nav-link::after,
    .hover-nav-link:hover::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: #f87171; /* Warna merah, ganti sesuai kebutuhan */
        transition: width 0.3s ease-in-out;
    }
    
    .active-nav-link::after {
        width: 100%;
    }
    
    .hover-nav-link:hover::after {
        width: 100%;
    }
</style> --}}