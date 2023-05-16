<!DOCTYPE html>
<html lang="en">

<x-layout>
    <article>
        <h1>
           {{ $post->title  }}  
        </h1>

        <p>
            <a href="/author/{{ $post->author->username }}" class="anchor">{{ $post->author->name }}</a> <a
                href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>


        <div>
            {!! $post->body !!}
        </div>
    </article>
    <a href="/">Go Home</a>
</x-layout>

<p></p>