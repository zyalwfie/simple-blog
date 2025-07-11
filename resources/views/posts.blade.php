<x-layout :title="$title">
    <section class="grid grid-cols-1 md:grid-cols-3 gap-x-4">
        @foreach ($posts as $post)
            <article class="border-b border-gray-500 py-8">
                <h2 class="text-2xl font-bold text-gray-900">{{ $post['title'] }}</h2>
                <div class="text-base text-gray-500">
                    <a href="#">{{ $post['author'] }}</a> | 1 January 2025
                </div>
                <p class="my-4 font-light">{{ Str::limit($post['body'], 100) }}</p>
                <a href="/posts/{{ $post['slug'] }}"
                    class="block max-w-max px-4 py-2 rounded-md bg-indigo-600 text-white hover:bg-indigo-800">Read more
                    &raquo;</a>
            </article>
        @endforeach
    </section>
</x-layout>
