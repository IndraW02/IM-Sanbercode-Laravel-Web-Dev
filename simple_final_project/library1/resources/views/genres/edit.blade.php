<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Genre') }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-2xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">

            @if ($errors->any())
                <div class="mb-4 p-3 bg-red-200 text-red-800 rounded">
                    <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
                </div>
            @endif

            <form action="{{ route('genres.update', $genre->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label class="block text-gray-700 dark:text-gray-200">Nama Genre</label>
                    <input type="text" name="name" value="{{ $genre->name }}" class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-200" required>
                </div>

                <div class="flex space-x-2">
                    <button class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600">Update</button>
                    <a href="{{ route('genres.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Kembali</a>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>
