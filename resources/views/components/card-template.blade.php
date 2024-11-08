<div class="block max-w-md w-[80%] md:w-[40%] lg:w-[35%] py-3 px-2 md:py-5 md:px-3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

    {{-- Card Header --}}
    @isset($header)
        <div class="bg-gray-100 px-4 py-3 border-b border-gray-200">
            {{ $header }}
        </div>
    @endisset

    {{-- Card Body --}}
    <div class="p-4">
        {{ $slot }}
    </div>

    {{-- Card Footer --}}
    @isset($footer)
        <div class="bg-gray-100 px-4 py-3 border-t border-gray-200 text-right">
            {{ $footer }}
        </div>
    @endisset

</div>
