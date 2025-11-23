<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class='py-8 max-w-screen-md border-b border-gray-300'>
        <h1 class='mb-1 text-white text-3xl' >{{ $post['title'] }}</h1>
        <div class='text-white text-base'>
            by <a href='/author/{{ $post->author->username }}' class='text-gray-400 text-base hover:underline'>{{ $post->author->name }} </a> 
            in <a href='/category/{{ $post->category->slug }}' class='text-gray-400 text-base hover:underline'>{{ $post->category->name }} </a> 
            | {{ $post->created_at->diffForHumans() }} 
        </div>
        <p class='my-4 text-white font-light'>{{ $post['body'] }}</p>
        <a href="/posts" class='text-blue-500 font-medium hover:underline'>&laquo; Back to Blogs</a>
    </article>
</x-layout>