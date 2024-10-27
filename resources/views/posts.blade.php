<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot>

    @foreach ($posts as $post)
        
    <article class="py-8 max-w-screen-sm mx-auto border-b border-gray-200">
        <h3 class="text-2xl font-bold tracking-tight text-primary-500 flex items-center">
            {{ $post['title'] }} &nbsp;
            <span class="inline-flex items-center rounded-md bg-purple-50 px-2 py-1 text-xs font-medium text-purple-700 ring-1 ring-inset ring-purple-700/10">{{ $post['season'] }}</span>
        </h3>
        <div class="text-base text-gray-300">
            <a href="#" class="text-sm">{{ $post['author'] }} | {{ $post['project'] }} | 27 Oktober 2024</a>
        </div>
        <p class="my-4 font-light">
            {{ Str::limit($post['body'], '150') }}
        </p>
        <a href="#" class="text-sm pt-3 pr-3 pb-3 rounded-lg hover:bg-primary-100 hover:pl-3 hover:text-white transition-all ease-in-out duration-500 text-secondary-500">Read more &raquo;</a>
    </article>

    @endforeach
</x-layout>