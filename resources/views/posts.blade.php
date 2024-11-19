<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h3>Welcome to my blog</h3>

    @foreach ($feeds as $f)
    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $f['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $f['author'] }}</a> | 19 November 2024
        </div>
        <p class="my-4 font-light">
            {{-- {{ $f['body'] }} --}}
            {{ Str::limit($f['body'], 50, '...') }}
        </p>
        <a href="#" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
    </article>
    @endforeach

</x-layout>
