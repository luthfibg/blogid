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
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 6.087c0-.355.186-.676.401-.959.221-.29.349-.634.349-1.003 0-1.036-1.007-1.875-2.25-1.875s-2.25.84-2.25 1.875c0 .369.128.713.349 1.003.215.283.401.604.401.959v0a.64.64 0 0 1-.657.643 48.39 48.39 0 0 1-4.163-.3c.186 1.613.293 3.25.315 4.907a.656.656 0 0 1-.658.663v0c-.355 0-.676-.186-.959-.401a1.647 1.647 0 0 0-1.003-.349c-1.036 0-1.875 1.007-1.875 2.25s.84 2.25 1.875 2.25c.369 0 .713-.128 1.003-.349.283-.215.604-.401.959-.401v0c.31 0 .555.26.532.57a48.039 48.039 0 0 1-.642 5.056c1.518.19 3.058.309 4.616.354a.64.64 0 0 0 .657-.643v0c0-.355-.186-.676-.401-.959a1.647 1.647 0 0 1-.349-1.003c0-1.035 1.008-1.875 2.25-1.875 1.243 0 2.25.84 2.25 1.875 0 .369-.128.713-.349 1.003-.215.283-.4.604-.4.959v0c0 .333.277.599.61.58a48.1 48.1 0 0 0 5.427-.63 48.05 48.05 0 0 0 .582-4.717.532.532 0 0 0-.533-.57v0c-.355 0-.676.186-.959.401-.29.221-.634.349-1.003.349-1.035 0-1.875-1.007-1.875-2.25s.84-2.25 1.875-2.25c.37 0 .713.128 1.003.349.283.215.604.401.96.401v0a.656.656 0 0 0 .658-.663 48.422 48.422 0 0 0-.37-5.36c-1.886.342-3.81.574-5.766.689a.578.578 0 0 1-.61-.58v0Z" />
                  </svg>                  
                &nbsp;Tile {{ Str::trim($saga['tile']) }}
            </span>
            <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">
                {{ $saga['rate'] }}
            </span>
        </a>
        <div class="text-base text-gray-300">
            <a href="/authors/{{ $saga->author->id }}" class="text-sm">{{ $saga->author->name }}</a> | <a href="#" class="text-sm"><span class="text-yellow-300"> {{ $saga['project'] }} </span></a> | <a href="#" class="text-sm">{{ $saga->created_at->diffForHumans() }}</a>
        </div>
        <p class="my-4 font-light">
            {{ Str::limit($saga['body'], '150') }}
        </p>
        <a href="/sagas/{{ $saga['slug'] }}" class="text-sm pt-3 pr-3 pb-3 rounded-lg hover:bg-primary-100 hover:pl-3 hover:text-white transition-all ease-in-out duration-500 text-secondary-500">Selengkapnya &raquo;</a>
    </article>

    @endforeach
</x-layout>