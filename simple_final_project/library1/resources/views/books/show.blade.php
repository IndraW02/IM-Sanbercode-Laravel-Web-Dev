<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $book->title }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">

            <div class="mb-4">
                @if($book->cover_image)
                    <img src="{{ asset('storage/' . $book->cover_image) }}" alt="Cover" class="w-48 mb-4">
                @endif
                <p><strong>Genre:</strong> {{ $book->genre->name ?? '-' }}</p>
                <p class="mt-2">{{ $book->description }}</p>
            </div>

            <hr class="my-4">

            <h3 class="font-semibold text-lg mb-2">Komentar</h3>

            <div class="mb-4">
                @forelse($book->comments as $comment)
                    <div class="mb-2 p-2 border rounded bg-gray-50 dark:bg-gray-700">
                        <p class="text-gray-800 dark:text-gray-200"><strong>{{ $comment->user->name }}:</strong> {{ $comment->content }}</p>
                        <p class="text-sm text-gray-500 dark:text-gray-400">{{ $comment->created_at->diffForHumans() }}</p>
                    </div>
                @empty
                    <p class="text-gray-500 dark:text-gray-400">Belum ada komentar.</p>
                @endforelse
            </div>

            <form action="{{ route('books.comments.store', $book->id) }}" method="POST">
                @csrf
                <div class="mb-2">
                    <textarea name="content" placeholder="Tulis komentar..." class="w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-200" required></textarea>
                </div>
                <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Kirim Komentar</button>
            </form>

            <div class="mt-4">
                <a href="{{ route('books.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Kembali ke Buku</a>
            </div>

        </div>
    </div>
</x-app-layout>
