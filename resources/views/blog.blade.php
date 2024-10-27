<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot>
        
    <article class="py-8 max-w-screen-sm mx-auto border-b border-gray-200">
        <div class="flex items-center">
            <h3 class="text-2xl font-bold mr-2 tracking-tight text-primary-500">
                {{ $blog['title'] }}
            </h3>
            {{-- <span class="inline-flex items-center rounded-md bg-purple-50 px-2 py-1 text-xs font-medium text-purple-700 ring-1 ring-inset ring-purple-700/10">{{ $blog['season'] }}</span> --}}
        </div>
        <div class="text-base text-gray-300">
            <a href="#" class="text-sm">{{ $blog['author'] }} | 27 Oktober 2024</a>
        </div>
        <p class="my-4 font-light">
            {{ $blog['body'] }}
        </p>
        <a href="/blogs" class="text-sm pt-3 pr-3 pb-3 rounded-lg hover:bg-primary-100 hover:pl-3 hover:text-white transition-all ease-in-out duration-500 text-secondary-500">&laquo; Kembali ke semua blog </a>
    </article>

</x-layout>