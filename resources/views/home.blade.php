<x-layout>
  <x-slot:title>
    {{ $title }}
  </x-slot>
  <div class="p-1 md:p-4 mb-3 md:mb-5 mx-auto max-w-screen lg:py-4 lg:px-0">
    <x-chart-card :data="$chartData">
    </x-chart-card>
  </div>
  <div class="grid grid-cols-6 md:cols-12 grid-flow-col gap-4">
    <div class="col-span-full md:col-span-9">
      <x-blog-table :blogs="$blogs"></x-blog-table>
    </div>
    <x-blog-summary></x-blog-summary>
  </div>

</x-layout>