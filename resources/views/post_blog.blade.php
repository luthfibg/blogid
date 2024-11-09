<x-layout>
    <x-slot:title>
        Post Blog
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="action.php">
                        {{-- <div class="">
                            
                        </div> --}}
                        <div class="mb-4">
                            <label for="title" class="block mb-2 text-md text-gray-600 font-medium  dark:text-white">Title<span class="text-red-500">*</span></label>
                            <input type="text" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your Blog Title" required />
                        </div>

                        <div class="mb-4">

                            <label for="category" class="block mb-2 text-md font-medium text-gray-600 dark:text-white">Kategori blog<span class="text-red-500">*</span></label>
                            <select id="category" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Pilih kategory blog</option>
                                <option value="web-programming">Pemrograman Web</option>
                                <option value="mobile-programming">Pemrograman Mobile</option>
                                <option value="game-development">Pengembangan Game</option>
                                <option value="internet-of-things">Internet Of Things</option>
                                <option value="graphic-design">Desain Grafis</option>
                                <option value="machine-learning">Pembelajaran Mesin</option>
                                <option value="data-science">Data Science</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block text-md mb-2 text-gray-600 font-medium">Deskripsi</label>
                            <input type="text" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="description" id="description" placeholder="(Optional)">
                        </div>

                        <div class="mb-8">
                            <label class="block text-md text-gray-600 font-medium">Content <span class="text-red-500">*</span></label>
                            <textarea name="content" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </textarea>
                        </div>

                        <div class="flex p-1">
                            <select class="border-2 rounded-md border-gray-300 border-r p-2" name="action">
                                <option>Save and Publish</option>
                                <option>Save Draft</option>
                            </select>
                            <button role="submit" class="p-3 rounded-md bg-blue-500 text-white hover:bg-blue-400" required>Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace( 'content' );
    </script>

    <style>
        .cke_notification {
            display: none;
        }
    </style>
</x-layout>