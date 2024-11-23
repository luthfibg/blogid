<x-layout>
    <div class="grid grid-cols-[1fr_3fr] gap-4 h-full px-20">
        <!-- Kolom Kiri: Kartu Data Diri -->
        <div class="col-span-1 h-full w-full">
          <div class="block h-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            {{-- <div class="bg-[#F7F7F7] rounded-full w-[7rem] h-[7rem] my-3 mx-auto overflow-hidden pt-2">
                <img src="{{ asset('images/profile-placeholder.jpg') }}" alt="profile-placeholder">
            </div> --}}
            <div class="bg-[#F7F7F7] rounded-full w-[7rem] h-[7rem] my-3 mx-auto overflow-hidden">
                <img src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="profile-image">
            </div>
            <h5 class="text-center mb-6 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Profile Name</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">
              Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
            </p>
          </div>
        </div>
      
        <!-- Kolom Kanan: Dua Kartu Bertumpuk -->
        <div class="col-span-1 h-full grid grid-rows-[auto_1fr] gap-4">
          <!-- Kartu Atas: Achievements Bar -->
          <div>
            <div class="block w-full p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
              <h5 class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900 dark:text-white">Achievements Bar</h5>
            </div>
          </div>
      
          <!-- Kartu Bawah: Bio dan Konten Profil -->
          <div class="flex-grow">
            <div class="block w-full h-full p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Bio or other main profile information</h5>
              <p class="font-normal text-gray-700 dark:text-gray-400">
                Content about bio or other profile sections like top blogs and additional cards.
              </p>
            </div>
          </div>
        </div>
    </div>      
</x-layout>