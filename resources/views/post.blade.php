<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <a class="text-blue-500 hover:underline" href="/posts">&laquo; back to all posts</a>
                <header class="my-4 lg:my-6 not-format">
                    <address class="flex items-center mb-6 not-italic">

                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                            <div>
                                <a href="/author/{{ $post->author->username }}" rel="author"
                                    class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                                <p class="text-base text-gray-500 dark:text-gray-400 mb-1">
                                    {{ $post->created_at->diffForHumans() }}</p>
                                <a href="/category/{{ $post->category->slug }}"
                                    class="bg-blue-500 text-white text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                    {{ $post->category->name }}
                                </a>
                            </div>
                        </div>
                    </address>
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $post->title }}</h1>
                </header>
                <p class="text-white">{{ $post->body }}</p>
            </article>
        </div>
    </main>
    {{-- <article class='py-8 max-w-screen-md border-b border-gray-300'>
        <h1 class='mb-1 text-white text-3xl' >{{ $post['title'] }}</h1>
        <div class='text-white text-base'>
            by <a href='/author/{{ $post->author->username }}' class='text-gray-400 text-base hover:underline'>{{ $post->author->name }} </a> 
            in <a href='/category/{{ $post->category->slug }}' class='text-gray-400 text-base hover:underline'>{{ $post->category->name }} </a> 
            | {{ $post->created_at->diffForHumans() }} 
        </div>
        <p class='my-4 text-white font-light'>{{ $post['body'] }}</p>
        <a href="/posts" class='text-blue-500 font-medium hover:underline'>&laquo; Back to Blogs</a>
    </article> --}}
</x-layout>
