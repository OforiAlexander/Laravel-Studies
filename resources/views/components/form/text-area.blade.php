@props(['name'])

<x-form.field>

    <x-form.label name="{{ $name }}" />

    <textarea name="{{ $name }}" id="{{ $name }}" rows="1" required
        class="border border-gray-400 p-2 w-full">{{ old($name) }}</textarea>

    <x-form.error name="{{ $name }}" />
</x-form.field>
