@props(['heading'])
<section class="px-6 py-8 max-w-4xl mx-auto">

    <h1 class="text-lg text-blue-500 font-bold mb-8 pb-2 border-b border-l ">{{ $heading }}</h1>

    <div class="flex border-l pl-2">
        <aside class="w-48 flex-shrink-0">
            <h3 class="font-bold text-green-400 mb-6">Links</h3>
            <ul>
                <li>
                    <a href="/admin/posts" class="{{ request()->is('admin/posts') ? 'text-blue-500 font-bold mb-4' : 'text-green-500 font-bold mb-4' }}"  ">All Post</a>
                </li>
                <li>
                    <a href="/admin/posts/create" class="{{ request()->is('admin/posts/create') ? 'text-blue-500 font-bold mb-4' : 'text-green-500 font-bold mb-4' }}"  ">New Post</a>
                </li>
            </ul>
        </aside>
        <main class="flex-1">
            <x-panel class="">
                {{ $slot }}
            </x-panel>
        </main>
    </div>

</section>
