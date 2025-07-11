<x-layout :title="$title">
    <article class="py-8">
        <h2 class="text-2xl font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | 1 January 2025
        </div>
        <p class="my-4 font-light">{{ $post['body'] }}</p>
        <a href="/posts"
            class="block max-w-max px-4 py-2 rounded-md bg-indigo-600 text-white hover:bg-indigo-800">
            &laquo; Back</a>
    </article>
</x-layout>
