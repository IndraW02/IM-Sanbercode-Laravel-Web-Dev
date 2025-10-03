<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Buku') }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">

            <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Judul -->
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 dark:text-gray-200">Judul</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" class="w-full border rounded px-3 py-2">
                    @error('title')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Genre -->
                <div class="mb-4">
                    <label for="genre_id" class="block text-gray-700 dark:text-gray-200">Genre</label>
                    <select name="genre_id" id="genre_id" class="w-full border rounded px-3 py-2">
                        <option value="">-- Pilih Genre --</option>
                        @foreach($genres as $genre)
                            <option value="{{ $genre->id }}" {{ old('genre_id') == $genre->id ? 'selected' : '' }}>
                                {{ $genre->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('genre_id')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Deskripsi -->
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 dark:text-gray-200">Deskripsi</label>
                    <textarea name="description" id="description" class="w-full border rounded px-3 py-2">{{ old('description') }}</textarea>
                    @error('description')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Cover Image -->
                <div class="mb-4">
                    <label for="cover_image" class="block text-gray-700 dark:text-gray-200">Cover Buku</label>
                    <input type="file" name="cover_image" id="cover_image" class="w-full border rounded px-3 py-2" accept="image/*">
                    @error('cover_image')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                    Simpan Buku
                </button>
            </form>

        </div>
    </div>
</x-app-layout>
