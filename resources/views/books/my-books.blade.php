@extends('layouts.layout')

@section('title', $title)

@section('content')
    <div class="container mx-auto p-4 md:p-6 pt-6">
        <div class="flex justify-center mb-12">
            <h2 class="text-4xl font-semibold text-black dark:text-white pt-4">My Books</h2>
        </div>

        <div class="mb-6">
            <x-search-filter-form :categories=$categories action="{{ url('/my-books') }}" />
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @forelse ($books as $book)
                <x-book-card :book="$book" />
            @empty
                <div class="col-span-1 sm:col-span-2 md:col-span-3 lg:col-span-4 text-center">
                    <div class="p-6 border-2 border-gray-300 rounded-lg bg-gray-100 dark:bg-gray-800 dark:border-gray-700">
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-300">No books found</p>
                        <p class="text-gray-500 dark:text-gray-400 mt-2">Start browsing interesting books to borrow.</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection