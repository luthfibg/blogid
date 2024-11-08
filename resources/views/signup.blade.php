<x-layout>
    <x-slot:title>
        Form Daftar
    </x-slot>
    
    {{-- <x-slot:title>Sign In</x-slot> --}}
    <div class="w-full flex justify-center items-center h-[100%]">        
        <x-card-template>
            <x-form-template action="{{ route('sign-up') }}" method="POST">
                <div>
                    <label for="name" class="block mb-2 text-sm">Nama Lengkap</label>
                    <input type="text" name="name" id="name" class="w-full p-2 border rounded-lg" required />
                </div>

                <div>
                    <label for="username" class="block mb-2 text-sm">Username</label>
                    <input type="text" name="username" id="username" class="w-full p-2 border rounded-lg" required />
                </div>

                <div>
                    <label for="email" class="block mb-2 text-sm">Email</label>
                    <input type="email" name="email" id="email" class="w-full p-2 border rounded-lg" required />
                </div>
            
                <div>
                    <label for="password" class="block mb-2 text-sm">Password</label>
                    <input type="password" name="password" id="password" class="w-full p-2 border rounded-lg" required />
                </div>
            
                <x-slot:submit>
                    <button type="submit" class="px-4 py-2 text-sm bg-primary-200 text-primary-800 rounded-full hover:bg-primary-100">
                        Sign Up
                    </button>
                </x-slot>
            </x-form-template>
        </x-card-template>
    </div>
</x-layout>