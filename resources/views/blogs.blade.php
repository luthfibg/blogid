<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot>

    @foreach ($blogs as $blog)
        
    <article class="py-8 max-w-screen-sm mx-auto border-b border-gray-200">
        <a href="/blogs/{{ $blog['slug'] }}" class="flex items-center">
            <h3 class="text-2xl font-bold mr-2 tracking-tight text-primary-500">
                {{ $blog['title'] }}
            </h3>
        </a>
        <div class="text-base text-gray-300">
            <a href="/authors/{{ $blog->author->id }}" class="text-sm decoration-none">{{ $blog->author->name }}</a> | <a href="#" class="text-sm">{{ $blog->created_at->diffForHumans() }}</a>
        </div>
        <p class="my-4 font-light">
            {{ Str::limit($blog['body'], '150') }}
        </p>
        <a href="/blogs/{{ $blog['slug'] }}" class="text-sm pt-3 pr-3 pb-3 rounded-lg hover:bg-primary-100 hover:pl-3 hover:text-white transition-all ease-in-out duration-500 text-secondary-500">Selengkapnya &raquo;</a>
    </article>

    @endforeach
</x-layout>