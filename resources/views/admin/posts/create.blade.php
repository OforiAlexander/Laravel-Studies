<x-layout>

    <x-setting heading="Publish A New Post">
        <form action="/admin/posts" method="post" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title" />
            <x-form.input name="slug" />
            <x-form.input name="image" type="file" />
            <x-form.text-area name="excerpt" />
            <x-form.text-area name="body" />

            <x-form.field>
                <x-form.label name="category" />
                <select name="category_id" id="category_id">
                    @php
                        $category = \App\Models\Category::all();
                    @endphp
                    @foreach ($category as $categories)
                        <option value="{{ $categories->id }}"
                            {{ old('category_id') == $categories->id ? 'selected' : '' }}>
                            {{ ucwords($categories->name) }}</option>
                    @endforeach
                </select>
                <x-form.error name=" name"/>
            </x-form.field>

            <x-form.button>
                Publish
            </x-form.button>
        </form>
    </x-setting>
</x-layout>
