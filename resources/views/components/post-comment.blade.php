@props(['comment'])

<article class="flex bg-gray-100 p-6 rounded-xl border border-gray-200 space-x-5">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/60?u={{ $comment->id }}" height="60" width="60" class="rounded-xl">
    </div>
    <div>
        <header class="mb-3">
            <h3 class="font-bold">{{ $comment->author->username }} </h3>
            <p class="text-xs text-gray-600">Posted
                <time>{{ $comment->created_at }}</time>
            </p>
        </header>

        <p class="text-sm">{{ $comment->body }}</p>
    </div>
</article>