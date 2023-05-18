<x-layout>

    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-200 p-7 rounded-xl border border-gray-300">
            <h1 class="text-center text-xl font-bold">Register</h1>
            <form action="/register" method="post" class="mt-10">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Name
                    </label>
                    {{-- name --}}
                    <input type="text" name="name" id="name" required value="{{ old('name') }}"
                        class="border border-gray-500 p-2 w-full">

                    @error('name')
                        <p class="text-red-500 mt-1 text-xs">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- username --}}
                <div class="mb-6">
                    <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Username
                    </label>

                    <input type="text" name="username" id="username" required value="{{ old('username') }}"
                        class="border border-gray-500 p-2 w-full">
                    {{-- error message --}}
                    @error('username')
                        <p class="text-red-500 mt-1 text-xs">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- Email --}}
                <div class="mb-6">
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        email
                    </label>

                    <input type="text" name="email" id="email" required value="{{ old('email') }}"
                        class="border border-gray-500 p-2 w-full">

                    {{-- error message --}}
                    @error('email')
                        <p class="text-red-500 mt-1 text-xs">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- password --}}
                <div class="mb-6">
                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Password
                    </label>

                    <input type="password" name="password" id="password" required
                        class="border border-gray-500 p-2 w-full">

                    {{-- error message --}}
                    @error('password')
                        <p class="text-red-500 mt-1 text-xs">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                {{-- SUBMIT --}}
                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Submit
                    </button>
                </div>
            </form>
        </main>
    </section>

</x-layout>
