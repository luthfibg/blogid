<x-layout>
    
    {{-- <x-slot:title>Sign In</x-slot> --}}

    <div class="w-full flex-row hidden justify-center md:flex items-center h-[100%]">
        <div class="w-[50%] border-e border-gray-300">
            <x-slot:title>
                Sign in to
            </x-slot>
            <img src="/images/logo.png" alt="blogid-logo" class="w-[15rem] h-auto mx-auto">
        </div>
        <div class="w-[50%] px-20">
            <x-form-template action="{{ route('sign-in') }}" method="POST">
                <div>
                    <label for="email" class="block mb-2">Email</label>
                    <input type="email" name="email" id="email" class="w-full p-2 border rounded" required />
                </div>
            
                <div>
                    <label for="password" class="block mb-2">Password</label>
                    <input type="password" name="password" id="password" class="w-full p-2 border rounded" required />
                </div>
            
                <x-slot:submit>
                    <button type="submit" class="px-4 py-2 text-sm bg-primary-200 text-primary-800 rounded-full hover:bg-primary-100">
                        Sign In
                    </button>
                </x-slot>
            </x-form-template>
        </div>
    </div>      

    {{-- Mobile Login --}}
    <div class="w-full flex flex-col justify-center md:hidden items-center h-[100%]">
        <div class="w-[100%]">
            <x-slot:title>
                Sign in to
            </x-slot>
            <img src="/images/logo.png" alt="blogid-logo" class="w-[10rem] h-auto mx-auto">
        </div>       
        <div class="w-[100%]">
            <x-card-template>
                <x-form-template action="{{ route('sign-in') }}" method="POST">
                    <div>
                        <label for="email" class="block mb-2">Email</label>
                        <input type="email" name="email" id="email" class="w-full p-2 border rounded" required />
                    </div>
                
                    <div>
                        <label for="password" class="block mb-2">Password</label>
                        <input type="password" name="password" id="password" class="w-full p-2 border rounded" required />
                    </div>
                
                    <x-slot:submit>
                        <button type="submit" class="px-4 py-2 text-sm bg-primary-200 text-primary-800 rounded-full hover:bg-primary-100">
                            Sign In
                        </button>
                    </x-slot>
                </x-form-template>
            </x-card-template>
        </div>          
    </div>
</x-layout>