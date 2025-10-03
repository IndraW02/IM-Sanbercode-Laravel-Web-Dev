<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-end mb-4">
            <a href="{{ route('books.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Tambah Buku</a>
        </div>

        @if(session('success'))
            <div class="mb-4 p-3 bg-green-200 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Judul</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Genre</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach($books as $book)
                        <tr>
                            <td class="px-6 py-4">{{ $book->id }}</td>
                            <td class="px-6 py-4">{{ $book->title }}</td>
                            <td class="px-6 py-4">{{ $book->genre->name ?? '-' }}</td>
                            <td class="px-6 py-4 space-x-2">
                                <a href="{{ route('books.show', $book->id) }}" class="text-blue-500 hover:underline">Detail</a>
                                <a href="{{ route('books.edit', $book->id) }}" class="text-yellow-500 hover:underline">Edit</a>
                                <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Yakin ingin hapus?')" class="text-red-500 hover:underline">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
