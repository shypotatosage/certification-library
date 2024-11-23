@extends('layouts.layout')

@section('title', $title)

@section('content')
    <div class="container mx-auto p-4 md:p-6 pt-6">
        <div class="flex lg:flex-row flex-col">
            <div class="lg:pe-6 justify-center flex">
                <img src="http://127.0.0.1:8000/storage/{{ $book->book_cover }}" alt="Book Cover for {{ $book->name }}" class="rounded-xl object-fill h-5/6 max-w-lg">
            </div>
            <div class="lg:w-1/2">
                <h2 class="text-4xl font-bold text-black dark:text-white pt-4">{{ $book->name }}</h2>
                <p class="text-lg text-black font-medium dark:text-white pt-2">{{ $book->categories->pluck('name')->join(', ') }}</p>
                <p class="text-md text-black dark:text-white pt-6">{!! nl2br(e($book->description)) !!}</p>
                <p class="text-lg text-black font-medium dark:text-white pt-6">Author: {{ $book->author }}</p>
                <p class="text-lg text-black font-medium dark:text-white pt-2">Published {{ $book->published_year }} by {{ $book->publisher }}</p>

                @auth
                    @if($book->borrower_id)
                        @if($book->borrower_id == auth()->user()->id)
                            <form action="{{ route('return.book') }}" method="POST">
                                @csrf

                                <input type="hidden" name="book_id" value="{{ $book->id }}">

                                <x-primary-button class="mt-6">
                                    {{ __('Return Book') }}
                                </x-primary-button>
                            </form>
                        @else
                            <div class="mt-6 inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-100 dark:border-gray-700 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm disabled:opacity-25 transition ease-in-out duration-150">
                                <p>Book is Unavailable</p>
                            </div>
                        @endif
                    @else
                        <form action="{{ route('borrow.book') }}" method="POST">
                            @csrf

                            <input type="hidden" name="book_id" value="{{ $book->id }}">

                            <x-primary-button class="mt-6">
                                {{ __('Borrow') }}
                            </x-primary-button>
                        </form>
                    @endif
                @endauth
            </div>
        </div>
    </div>
@endsection