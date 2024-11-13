<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h3 class="text-xl">Welcome to my Blog!</h3>


  
        <article class="py-5 max-w-screen-md border-b">
            
                <h3 class="mb-2 text-2xl tracking-tight font-bold text-gray-800">{{ $post->title }}</h3>

            <div class="text-base text-gray-500">
                <a href="#">{{ $post->author->name }}</a> | {{ $post->created_at->diffForHumans() }}
            </div>
            <p class="my-4 font-light">
                {{ $post->body }}
            </p>
            <a href="/blogs" class="font-medium text-gray-500 hover:underline">&laquo; Back To Posts</a>
        </article>
    

    </article>
</x-layout>
