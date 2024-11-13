<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h3 class="text-xl">Welcome to my Blog!</h3>

    <article class="py-5 max-w-screen-md border-b border-gray-300">
        <h3 class="mb-2 text-2xl tracking-tight font-bold text-gray-800">Judul Artikel 1</h3>
        <div class="text-base text-gray-500">
            <a href="#">Lea Alyu</a> | 1 January 2024
        </div>
        <p class="my-4 font-light">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo, dolorum aspernatur recusandae atque maiores
            dolorem ad officiis soluta, pariatur quibusdam eum culpa. Ducimus a ullam id omnis quas iure consequatur,
            perspiciatis eos quibusdam. Id a deserunt dolorum praesentium ullam, rerum quas iste alias ad magnam ipsam
            fugiat esse nemo. Quam!
        </p>
        <a href="" class="font-medium text-gray-500 hover:underline">Read more &raquo;</a>
    </article>

    <hr>

    @foreach ($blogs as $blog)
        <article class="py-5 max-w-screen-md border-b border-gray-300">
            <a href="/blog/{{ $blog->slug }}" class="text-base text-gray-500 hover:underline">
                <h3 class="mb-2 text-2xl tracking-tight font-bold text-gray-800">{{ $blog->title }}</h3>
            </a>
            <div class="">
                By
                <a class="hover: underline" href="/authors/{{ $blog->author->username }}">{{ $blog->author->name }}</a>
                |
                {{ $blog->created_at->diffForHumans() }} In
                <a class="hover: underline"
                    href="/categories/{{ $blog->category->slug }}">{{ $blog->category->name }}</a> |
                {{ $blog->created_at->diffForHumans() }}
            </div>
            <p class="my-4 font-light">
                {{ Str::limit($blog->body, 200) }}
            </p>
            <a href="/blog/{{ $blog->slug }}" class="font-medium text-gray-500 hover:underline">Read more &raquo;</a>
        </article>
    @endforeach

    </article>
</x-layout>
