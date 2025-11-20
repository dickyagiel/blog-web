<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class='py-8 max-w-screen-md border-b border-gray-300'>
        <h1 class='mb-1 text-white text-3xl' >{{ $post['title'] }}</h1>
        <div class='text-gray-400 text-base'>
            <a href='/author/{{ $post->author->username }}' class='hover:underline'>{{ $post->author->name }}</a> | 21-10-02 
        </div>
        <p class='my-4 text-white font-light'>{{ $post['body'] }}</p>
        <a href="/posts" class='text-blue-500 font-medium hover:underline'>&laquo; Back to Blogs</a>
    </article>    
</x-layout>