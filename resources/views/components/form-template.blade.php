<form action="{{ $action }}" method="{{ $method !== 'GET' ? 'POST' : 'GET' }}" enctype="multipart/form-data">
    @csrf
    @if($method !== 'GET' && $method !== 'POST')
        @method($method)
    @endif

    {{-- Bagian untuk judul form --}}
    @isset($title)
        <div class="mb-6">
            <h2 class="text-2xl font-semibold text-center">{{ $title }}</h2>
        </div>
    @endisset

    {{-- Slot untuk konten form --}}
    <div class="space-y-4">
        {{ $slot }}
    </div>

    {{-- Tombol submit --}}
    @isset($submit)
        <div class="mt-4 w-full flex justify-end">
            {{ $submit }}
        </div>
    @else
        <div class="mt-6 flex justify-end">
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                Submit
            </button>
        </div>
    @endisset
</form>
