@props(['trigger'])

<div x-data="{ show: false }" @click.away=" show= false" class="relative">
    {{-- THIS IS THE TRIGGER FOR THE DROP DOWN MENU TO APPEAR --}}
    <div @click=" show = ! show">
        {{ $trigger }}
    </div>
    {{-- THIS HAS THE DROP DOWN LINKS --}}

    <div x-show="show" class="py-2 absolute bg-gray-100 mt-2 rounded-xl w-full z-50 overflow-auto max-h-45" style="display:none:">
       {{ $slot }}
    </div>
</div>