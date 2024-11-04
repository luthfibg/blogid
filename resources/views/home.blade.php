<x-layout>
  <x-slot:title>
    {{ $title }}
  </x-slot>
  <div class="p-1 md:p-4 mb-3 md:mb-5 mx-auto max-w-screen-xl lg:py-4 lg:px-0">
    <x-chart-card :data="$chartData">
    </x-chart-card>
  </div>
  <div class="grid md:cols-12 grid-flow-col gap-4">
    <div class="col-span-9">
      <x-blog-table></x-blog-table>
    </div>
    <x-blog-summary class="col-span-3"></x-blog-summary>
  </div>

</x-layout>