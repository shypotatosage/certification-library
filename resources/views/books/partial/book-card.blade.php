<a href="/book/{{ $book->id }}" class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden drop-shadow-lg">
    <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden drop-shadow-lg">
        <img src="http://127.0.0.1:8000/storage/{{ $book->book_cover }}" alt="Book Cover for {{ $book->name }}" class="w-full h-80 object-cover">

        <div class="p-4">
            <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-100">{{ $book->name }}</h2>

            <p class="text-gray-600 dark:text-gray-300 text-sm mt-2">
                {{ Str::limit($book->description, 100) }}
            </p>

            <p class="text-gray-500 dark:text-gray-400 text-sm mt-4">
                <strong>Categories:</strong>
                {{ $book->categories->pluck('name')->join(', ') }}
            </p>
        </div>
    </div>
</a>