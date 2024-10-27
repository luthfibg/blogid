<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot>

    @foreach ($sagas as $saga)
        
    <article class="py-8 max-w-screen-sm mx-auto border-b border-gray-200">
        <a href="/sagas/{{ $saga['slug'] }}" class="flex items-center">
            <h3 class="text-2xl font-bold mr-2 tracking-tight text-primary-500">
                {{ $saga['title'] }}
            </h3>
            <span class="inline-flex mr-2 items-center rounded-md bg-purple-50 px-2 py-1 text-xs font-medium text-purple-700 ring-1 ring-inset ring-purple-700/10">                  
                {{ $saga['season'] }}
            </span>
            <span class="inline-flex mr-2 items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                </svg>
                &nbsp;Tile {{ $saga['tile'] }}
            </span>
            <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">
                {{ $saga['rate'] }}
            </span>
        </a>
        <div class="text-base text-gray-300">
            <a href="#" class="text-sm">{{ $saga['author'] }} | <span class="text-yellow-300"> {{ $saga['project'] }} </span> | 27 Oktober 2024</a>
        </div>
        <p class="my-4 font-light">
            {{ Str::limit($saga['body'], '150') }}
        </p>
        <a href="/sagas/{{ $saga['slug'] }}" class="text-sm pt-3 pr-3 pb-3 rounded-lg hover:bg-primary-100 hover:pl-3 hover:text-white transition-all ease-in-out duration-500 text-secondary-500">Selengkapnya &raquo;</a>
    </article>

    @endforeach
</x-layout>