@props(['name'])

<x-form.field>
    <x-form.label name="{{ $name }}" />


    <input name="{{ $name }}" id="{{ $name }}" {{ $attributes(['value'=>old($name)]) }}
        class="border border-gray-200 rounded p-2 w-full" value="{{ old($name) }}">

    <x-form.error name="{{ $name }}" />
</x-form.field>
