<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
    <article class='py-8 max-w-screen-md border-b border-gray-500'>
        <a href="/posts/{{ $post['slug'] }}" class='hover:underline'>
            <h2 class='mb-1 text-white text-3xl' >{{ $post['title'] }}</h2>
        </a>
        <div class=''>
            by <a href='/author/{{ $post->author->username }}' class='text-gray-400 text-base hover:underline'>{{ $post->author->name }} </a> 
            in <a href='/category/{{ $post->category->slug }}' class='text-gray-400 text-base hover:underline'>{{ $post->category->name }} </a> 
            | {{ $post->created_at->diffForHumans() }} 
        </div>
        <p class='my-4 text-white font-light'>{{ Str::limit($post['body'], 150) }}</p>
        <a href="/posts/{{ $post['slug'] }}" class='text-blue-500 font-medium hover:underline'>Read More &raquo;</a>
    </article>
    @endforeach
    
</x-layout>