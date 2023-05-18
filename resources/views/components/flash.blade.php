@if (session()->has('success'))
    <div x-data="{ show: true }"
    x-init="setTimeout(fn()=> show=false,3000)"
    x-data="show"
    class="fixed bg-blue-300 text-white py-2 px-4 rounded bottom-6 right-4 text-sm"
    >
       <p>{{ session('success') }}</p>
    </div>
@endif



{{-- set time out isn't working from this page loook at video numberm 48 --}}