<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot>

    <x-searchbar>
        Cari Artikel
    </x-searchbar>

    {{ $blogs->links() }}

    <div class="py-4 px-4 mx-auto max-w-screen-xl lg:py-4 lg:px-0"> 
        <div class="grid gap-4 md:gap-6 lg:grid-cols-3 sm:grid-cols-2">
        @forelse ($blogs as $blog)
        
            <article class="p-6 bg-white rounded-lg border border-none shadow-md dark:bg-gray-800 dark:border-gray-700">
                <a href="/blogs?blogCategory={{ $blog->blogCategory->slug }}" class="mb-2 flex justify-between items-center text-gray-500 h-[10%]">
                    <span class="bg-{{ $blog->blogCategory->color }}-100 text-{{ $blog->blogCategory->color }}-800 text-xs font-medium inline-flex items-center px-1.5 py-0.5 rounded dark:bg-{{ $blog->blogCategory->color }}-100 dark:text-{{ $blog->blogCategory->color }}-800">
                        @if ($blog->blogCategory->id == 1)
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3 mr-2 ml-0 p-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                            </svg>     
                        @elseif ($blog->blogCategory->id == 2)
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3 mr-2 ml-0 p-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                            </svg>
                        @elseif ($blog->blogCategory->id == 3)
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3 mr-2 ml-0 p-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0 1 19.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 0 0 4.5 10.5a7.464 7.464 0 0 1-1.15 3.993m1.989 3.559A11.209 11.209 0 0 0 8.25 10.5a3.75 3.75 0 1 1 7.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 0 1-3.6 9.75m6.633-4.596a18.666 18.666 0 0 1-2.485 5.33" />
                            </svg>
                        @elseif ($blog->blogCategory->id == 4)
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3 mr-2 ml-0 p-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 0 0-5.78 1.128 2.25 2.25 0 0 1-2.4 2.245 4.5 4.5 0 0 0 8.4-2.245c0-.399-.078-.78-.22-1.128Zm0 0a15.998 15.998 0 0 0 3.388-1.62m-5.043-.025a15.994 15.994 0 0 1 1.622-3.395m3.42 3.42a15.995 15.995 0 0 0 4.764-4.648l3.876-5.814a1.151 1.151 0 0 0-1.597-1.597L14.146 6.32a15.996 15.996 0 0 0-4.649 4.763m3.42 3.42a6.776 6.776 0 0 0-3.42-3.42" />
                            </svg>
                        @elseif ($blog->blogCategory->id == 5)
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3 mr-2 ml-0 p-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 0 0 2.25-2.25V6.75a2.25 2.25 0 0 0-2.25-2.25H6.75A2.25 2.25 0 0 0 4.5 6.75v10.5a2.25 2.25 0 0 0 2.25 2.25Zm.75-12h9v9h-9v-9Z" />
                            </svg>
                        @elseif ($blog->blogCategory->id == 6)
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3 mr-2 ml-0 p-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                            </svg>
                        @elseif ($blog->blogCategory->id == 7)
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3 mr-2 ml-0 p-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                            </svg>                                                                  
                        @endif
                        {{ $blog->blogCategory->name }}
                    </span>
                    <span class="text-xs font-light text-gray-400">{{ $blog->created_at->diffForHumans() }}</span>
                </a>
                <h4 class="mb-5 xl:mb-2 leading-6 text-md font-bold tracking-tight text-gray-900 dark:text-white h-[25%]"><a href="/blogs/{{ $blog['slug'] }}">{{ $blog['title'] }}</a></h4>
                <div class="prose prose-lg font-quicksand xl:mb-1 text-sm font-medium text-gray-500 dark:text-gray-400 h-[40%] ">{!! Str::limit($blog->body, '100') !!}</div>
                <div class="flex justify-between items-center bottom-0 h-auto">
                    <a href="/blogs?author={{ $blog->author->username }}" class="flex items-center space-x-2 text-gray-400">
                        <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Green avatar" />
                        <span class="text-xs dark:text-white p-0">
                            {{ $blog->author->name }}
                        </span>
                    </a>
                    <a href="/blogs/{{ $blog['slug'] }}" class="text-xs inline-flex items-center font-medium text-primary-600 dark:text-primary-500 px-2 py-1 hover:rounded-full hover:text-white hover:bg-primary-300 transition-all ease-in-out duration-500">
                        Read more
                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </article> 
        @empty
            <div class="text-base text-center text-gray-500 mb-5"></div>
            <article class="py-8 max-w-screen-sm mx-auto">
                <div class="text-base text-center text-gray-500 mb-5">Belum ada blog &#x1F61E;</div>
                <a href="/blogs" class="text-sm py-2 px-3 rounded-lg text-secondary-500 hover:bg-primary-200 hover:text-white">Kembali ke semua blog</a>
            </article>     
            <div class="text-base text-center text-gray-500 mb-5"></div>                   
        @endforelse
        </div>  
    </div>

    {{ $blogs->links() }}

</x-layout>