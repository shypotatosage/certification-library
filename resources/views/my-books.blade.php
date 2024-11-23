@extends('layouts.layout')

@section('title', $title)

@section('content')
    <div class="container mx-auto p-4 md:p-6 pt-6">
    <div class="mb-6">
        <form action="/" method="GET" class="flex flex-col md:flex-row gap-4">
            <input type="text" name="search" placeholder="Search" value="{{ request('search') }}" class="form-input w-full md:w-3/4 px-4 py-2 rounded-md border border-gray-300 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-200"/>

            <select name="category" class="form-select w-full md:w-1/4 px-4 py-2 rounded-md border border-gray-300 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-200">
                <option value="">All Categories</option>
                @foreach ($categories as $cat)
                    <option value="{{ $cat->name }}" {{ request('category') == $cat->name ? 'selected' : '' }}>
                        {{ $cat->name }}
                    </option>
                @endforeach
            </select>

            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md dark:hover:bg-blue-600 dark:bg-blue-700 dark:hover:bg-blue-900">
                Filter
            </button>
        </form>
    </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
            @foreach ($books as $book)
                <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden drop-shadow-lg">
                    <img src="{{ $book->book_cover }}" alt="Book Cover for {{ $book->name }}" class="w-full h-80 object-cover">

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
            @endforeach
        </div>
    </div>
@endsection