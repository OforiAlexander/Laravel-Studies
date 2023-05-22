<x-layout>

    <x-setting :heading="'Edit Your Post: ' . $posts->title">
        <form action="/admin/posts/{{ $posts->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="title" :value="old('title', $posts->title)" />
            <x-form.input name="slug" :value="old('slug', $posts->slug)" />

            <div class="flex mt-6">
                <div class="flex-1">
                    <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $posts->thumbnail)" />
                </div>
                <img src="{{ asset('storage/' . $posts->thumbnail) }}" alt="" class="rounded-xl ml-6 w-20">
            </div>

            <x-form.text-area name="excerpt">{{ old('title', $posts->excerpt) }}</x-form.text-area>
            <x-form.text-area name="body">{{ old('body', $posts->body) }}</x-form.text-area>

            <x-form.field>
                <x-form.label name="category" />
                <select name="category_id" id="category_id">
                    @php
                        $category = \App\Models\Category::all();
                    @endphp
                    @foreach ($category as $categories)
                        <option value="{{ $categories->id }}"
                            {{ old('category_id' . $posts->category_id) == $categories->id ? 'selected' : '' }}>
                            {{ ucwords($categories->name) }}</option>
                    @endforeach
                </select>
                <x-form.error name=" name" />
            </x-form.field>

            <x-form.button>
                Update
            </x-form.button>
        </form>
    </x-setting>
</x-layout>
