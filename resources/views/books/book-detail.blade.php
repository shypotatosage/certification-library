@extends('layouts.layout')

@section('title', $title)

@section('content')
    <div class="container mx-auto p-4 md:p-6 pt-6">
        <div class="flex lg:flex-row flex-col">
            <div class="lg:pe-12 lg:w-1/2">
                <img src="{{ $book->book_cover }}" alt="Book Cover for {{ $book->name }}" class="rounded-xl object-contain">
            </div>
            <div class="lg:w-1/2">
                <h2 class="text-4xl font-bold text-black dark:text-white pt-4">{{ $book->name }}</h2>
                <p class="text-lg text-black font-medium dark:text-white pt-2">{{ $book->categories->pluck('name')->join(', ') }}</p>
                <p class="text-md text-black dark:text-white pt-6">{!! nl2br(e($book->description)) !!}</p>
                <p class="text-lg text-black font-medium dark:text-white pt-6">Author: {{ $book->primary_author }}</p>
                <p class="text-lg text-black font-medium dark:text-white pt-2">Published {{ $book->published_year }} by {{ $book->publisher }}</p>

                @auth
                    @if($book->borrower_id)
                        @if($book->borrower_id == auth()->user()->id)
                            <x-primary-button class="mt-6">
                                {{ __('Return Book') }}
                            </x-primary-button>
                        @else
                            <div class="mt-6 inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-100 dark:border-gray-700 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm disabled:opacity-25 transition ease-in-out duration-150">
                                <p>Book is Unavailable</p>
                            </div>
                        @endif
                    @else
                        <x-primary-button class="mt-6">
                            {{ __('Borrow') }}
                        </x-primary-button>
                    @endif
                @endauth
            </div>
        </div>
    </div>
@endsection